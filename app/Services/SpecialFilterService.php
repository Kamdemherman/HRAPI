<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class SpecialFilterService
{
    protected array $filters;

    public function __construct()
    {
        $this->filters = config('special_filters');
    }

    public function has(string $table, string $key): bool
    {
        return isset($this->filters[$table][$key]);
    }

    public function handle(string $table, string $key)
    {
        if (!$this->has($table, $key)) {
            return DB::table($table)->get(); // fallback
        }

        $filter = $this->filters[$table][$key];
        $column = $filter['column'];
        $format = $filter['format'] ?? 'distinct_rows';
        $targetTable = $filter['target_table'] ?? $table;
        $primaryKey = $this->getPrimaryKey($targetTable);

        $query = DB::table($targetTable)->whereNotNull($column);

        switch ($format) {
            case 'flat_unique':
                return $query->orderBy($primaryKey)->pluck($column)->unique()->values();

            case 'distinct_rows':
                return $query->select($column)->distinct()->get();

             case 'custom_select': 
                $select = $filter['select'] ?? ['*'];
                return $query->select($select)->get();       

            default:
                return $query->get(); 
        }
    }

    protected function getPrimaryKey(string $table): string
    {
        $map = config('entity_keys');
        return $map[$table] ?? 'id';
    }
}
