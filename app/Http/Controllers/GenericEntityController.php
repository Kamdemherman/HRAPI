<?php

namespace App\Http\Controllers;

use App\Base\EntityBase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;
use App\Services\SpecialFilterService;

class GenericEntityController extends Controller

{
    protected EntityBase $entity;


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


    // $specialResult = SpecialFilterService::handle($table, $request->query());
    // if ($specialResult !== null) {
    //     return response()->json($specialResult);
    // }
    
    $specialResult = SpecialFilterService::handle($table, $request->query());
    if ($specialResult instanceof \Illuminate\Http\JsonResponse) {
        return $specialResult;
    }

    return response()->json($this->entity->search($request->query()));
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


