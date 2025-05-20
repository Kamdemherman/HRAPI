<?php

namespace App\Http\Controllers;

use App\Base\EntityBase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use App\Services\SpecialFilterService;
use Carbon\Carbon;

class GenericEntityController extends Controller

{
    protected EntityBase $entity;

    protected function getPrimaryKey(string $table): string
    {
        $map = config('entity_keys');
    
        return $map[$table] ?? 'id'; // retourne 'id' par défaut si non trouvé
    }



    protected function init(Request $request, $table, $idField = 'id')

    {
        if (!Schema::hasTable($table)) {
            abort(404, "La table '$table' n'existe pas.");
        }

        $this->entity = new EntityBase($table, $idField);
    }

  

    public function index(Request $request, $table, $idField = 'id')
{
    $this->init($request, $table, $idField);

    // $queryKeys = array_keys($request->query());
    // $specialKey = $queryKeys[0] ?? null;
    $specialKey = collect($request->query())->keys()->first();

    $filterService = new SpecialFilterService();

    if ($specialKey && $filterService->has($table, $specialKey)) {
        return response()->json($filterService->handle($table, $specialKey));
    }

    return response()->json($this->entity->search($request->query()));
}

    public function store(Request $request, $table)
    {
        $primaryKey = $this->getPrimaryKey($table);

        $this->init($request, $table,$primaryKey );

        $data = $request->all();

        $autoCols = config("auto_timestamps.$table", []);
        foreach ($autoCols as $col) {
            $data[$col] = Carbon::now()->format('Ymd'); 
        }

     $id = $this->entity->create($data);

    return response()->json(['id' => $id], 201);

        
    }

    public function show(Request $request, $table, $id)
    {
        $primaryKey = $this->getPrimaryKey($table);
        $this->init($request, $table, $primaryKey);
    
        $item = $this->entity->find($id);
        return $item ? response()->json($item) : response()->json(['message' => 'Not found'], 404);
    }

    public function update(Request $request, $table, $id)
    {
        $primaryKey = $this->getPrimaryKey($table);
        $this->init($request, $table, $primaryKey);

        $data = $request->all();

        $autoCols = config("auto_timestamps.$table", []);
        foreach ($autoCols as $col) {
            $data[$col] = Carbon::now()->format('Ymd'); 
        }
    
        $updated = $this->entity->update($id, $data);

        return response()->json($updated);

    }

    public function destroy(Request $request, $table, $id)
    {
        $primaryKey = $this->getPrimaryKey($table);
        $this->init($request, $table, $primaryKey);
    
        return response()->json(['deleted' => $this->entity->delete($id) > 0]);
    }
}


