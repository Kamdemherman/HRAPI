<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DynamicQueryService
{
    /**
     * Récupère dynamiquement les données d'une table avec jointures, colonnes personnalisées,
     * et traitements spéciaux selon le nom de la table.
     *
     * @param string $table
     * @return \Illuminate\Support\Collection
     */
    public function fetch(string $table)
    {
        $config = config("special_filters.$table");
        $query = DB::table($table);

        $this->applyJoins($query, $table, $config);
        $query->select($config['columns'] ?? ["$table.*"]);
        $results = $query->get();

      
        return $this->applySpecialTransformations($results, $table);
    }

    protected function applyJoins($query, string $table, ?array $config)
    {
        if (!$config) return;

        if (!empty($config['joins']) && is_array($config['joins'])) {
            foreach ($config['joins'] as $join) {
                $query->leftJoin(
                    $join['table'],
                    $join['local_key'],
                    '=',
                    $join['foreign_key']
                );
            }
        } elseif (!empty($config['join'])) {
            $join = $config['join'];
            $query->leftJoin(
                $join['table'],
                "$table." . $join['local_key'],
                '=',
                $join['table'] . '.' . $join['foreign_key']
            );
        }
    }

    protected function applySpecialTransformations($results, string $table)
    {
        switch ($table) {
            case 'interns':
                return $results->transform(function ($item) {
                    $item->AGE = $item->BIRTH_DATE ? Carbon::parse($item->BIRTH_DATE)->age : null;
                    return $item;
                });

            case 'applications':
            case 'internships':
                return $results->transform(function ($item) use ($table) {
                    foreach ($item as $key => $value) {
                        $item->$key = is_null($value) ? "" : (string) $value;
                    }

                    if ($table === 'internships') {
                        $item->YEAR_START = $item->DATE_START ? substr($item->DATE_START, 0, 4) : "";
                        $item->YEAR_END = $item->DATE_END ? substr($item->DATE_END, 0, 4) : "";
                    }

                    return $item;
                });

            default:
                return $results;
        }
    }
}
