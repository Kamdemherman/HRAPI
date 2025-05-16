<?php

namespace App\Base;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema; // Ajoute ceci si manquant
use Illuminate\Support\Collection;

class EntityBase
{
    protected string $table;
    protected string $idField;

    public function __construct(string $tableName, string $idField = 'id')
    {
        if (!Schema::hasTable($tableName)) {
            throw new \Exception("Table $tableName not found.");
        }

        $this->table = $tableName;
        $this->idField = $idField;
    }

    public function all(): Collection
    {
        return DB::table($this->table)->get();
    }

    public function find($id)
    {
        return DB::table($this->table)->where($this->idField, $id)->first();
    }

    public function create(array $data)
    {
        return DB::table($this->table)->insertGetId($data);
    }

    public function update($id, array $data)
    {
        DB::table($this->table)
            ->where($this->idField, $id)
            ->update($data);

        return $this->find($id);
    }

    public function delete($id)
    {
        return DB::table($this->table)
            ->where($this->idField, $id)
            ->delete();
    }

//     public function search(array $filters): Collection
// {
//     $query = DB::table($this->table);

//     foreach ($filters as $field => $value) {
//         if (Schema::hasColumn($this->table, $field)) {
//             $query->where($field, $value);
//         }
//     }

//     return $query->get();
// }

public function search(array $filters = [])
{
    $query = DB::table($this->table);

    foreach ($filters as $field => $value) {
        // Ignore les filtres spéciaux pour éviter doublons
        if (in_array($field, ['emiters', 'roles'])) {
            continue;
        }
        $query->where($field, $value);
    }

    return $query->get();
}

}
