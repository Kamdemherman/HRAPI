<?php

namespace App\Base;

use Illuminate\Support\Facades\DB;

class DBHelper
{
    public function getList(string $table, string $orderBy = null, array $where = []): array
    {
        $query = DB::table($table);

        foreach ($where as $key => $value) {
            $query->where($key, $value);
        }

        if ($orderBy) {
            $query->orderByDesc($orderBy);
        }

        return $query->get()->map(fn($item) => (array) $item)->toArray();
    }
}
