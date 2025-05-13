<?php

namespace App\Http\Controllers;

use App\Base\EntityBase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

class GenericEntityController extends Controller
{
    protected EntityBase $entity;

    protected function init(Request $request, string $table)
    {
        $idField = $this->guessIdField($table);
        $this->entity = new EntityBase($table, $idField);
    }

    protected function guessIdField(string $table): string
    {
        // Essaie de trouver une colonne "ID_" + nom de la table (en majuscules et au singulier)
        $columns = Schema::getColumnListing($table);

        $baseName = strtoupper(Str::singular($table));
        $possibleId = 'ID_' . $baseName;

        // Si la colonne existe, on la retourne
        if (in_array($possibleId, $columns)) {
            return $possibleId;
        }

        // Sinon, on vérifie s’il y a une colonne ID simple
        if (in_array('id', $columns)) {
            return 'id';
        }

        // En dernier recours, on prend la première colonne comme ID
        return $columns[0] ?? 'id';
    }

    public function index(Request $request, $table)
    {
        $this->init($request, $table);
        return response()->json($this->entity->all());
    }

    public function store(Request $request, $table)
    {
        $this->init($request, $table);
        return response()->json(['id' => $this->entity->create($request->all())], 201);
        
    }

    public function show(Request $request, $table, $id)
    {
        $this->init($request, $table);
        $item = $this->entity->find($id);
        return $item ? response()->json($item) : response()->json(['message' => 'Not found'], 404);
    }

    public function update(Request $request, $table, $id)
    {
        $this->init($request, $table);
        return response()->json($this->entity->update($id, $request->all()));
    }

    public function destroy(Request $request, $table, $id)
    {
        $this->init($request, $table);
        return response()->json(['deleted' => $this->entity->delete($id) > 0]);
    }
}




// namespace App\Http\Controllers;

// use App\Base\EntityBase;
// use Illuminate\Http\Request;
// use Illuminate\Support\Str;
// use Illuminate\Support\Facades\Schema;

// class GenericEntityController extends Controller
// {
//     public function index($table)
//     {
//         if (!Schema::hasTable($table)) {
//             return response()->json(['error' => 'Table not found.'], 404);
//         }

//         $entity = new EntityBase($table);
//         return response()->json($entity->all());
//     }

//     public function show($table, $id)
//     {
//         if (!Schema::hasTable($table)) {
//             return response()->json(['error' => 'Table not found.'], 404);
//         }

//         $entity = new EntityBase($table);
//         $result = $entity->find($id);
//         return $result ? response()->json($result) : response()->json(['error' => 'Not found.'], 404);
//     }

//     public function store(Request $request, $table)
//     {
//         if (!Schema::hasTable($table)) {
//             return response()->json(['error' => 'Table not found.'], 404);
//         }

//         $entity = new EntityBase($table);
//         $id = $entity->create($request->all());
//         return response()->json(['id' => $id], 201);
//     }

//     public function update(Request $request, $table, $id)
//     {
//         if (!Schema::hasTable($table)) {
//             return response()->json(['error' => 'Table not found.'], 404);
//         }

//         $entity = new EntityBase($table);
//         $updated = $entity->update($id, $request->all());
//         return response()->json($updated);
//     }

//     public function destroy($table, $id)
//     {
//         if (!Schema::hasTable($table)) {
//             return response()->json(['error' => 'Table not found.'], 404);
//         }

//         $entity = new EntityBase($table);
//         $deleted = $entity->delete($id);
//         return response()->json(['deleted' => $deleted]);
//     }
// }

