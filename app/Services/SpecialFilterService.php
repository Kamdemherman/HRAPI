<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class SpecialFilterService
{
    public function has(string $table, string $attribute): bool
    {
        $filters = config("special_filters.$table");
        return isset($filters[$attribute]);
    }

    public function handle(string $table, string $attribute)
    {
        $config = config("special_filters.$table.$attribute");

        if (!$config || !isset($config['column'])) {
            throw new \InvalidArgumentException("Configuration invalide pour $table.$attribute");
        }

        $column = $config['column'];
        $format = $config['format'] ?? 'distinct_rows';
        $targetTable = $config['target_table'] ?? $table;

        if ($format === 'flat_unique') {
            return DB::table($targetTable)
                ->distinct()
                ->pluck($column)
                ->unique()
                ->values();
        }

        if ($format === 'distinct_rows') {
            return DB::table($targetTable)
                ->select($column)
                ->distinct()
                ->orderBy($column)
                ->get();
        }

        if ($format === 'custom_select') {
            $select = $config['select'] ?? [$column];
            return DB::table($targetTable)
                ->select($select)
                ->distinct()
                ->get();
        }

        throw new \InvalidArgumentException("Format '$format' non supporté.");
    }
    protected function getPrimaryKey(string $table): string
    {
        $map = config('entity_keys');
        return $map[$table] ?? 'id';
    }
}
   

