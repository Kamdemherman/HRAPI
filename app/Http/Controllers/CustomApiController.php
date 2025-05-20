<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\SpecialFilterService;

class CustomApiController extends Controller
{
    protected $specialFilterService;

    public function __construct(SpecialFilterService $specialFilterService)
    {
        $this->specialFilterService = $specialFilterService;
    }

    public function index(string $table, Request $request)
    {
        // Si une clé de requête correspond à un filtre personnalisé
        foreach ($request->query() as $key => $value) {
            if (is_string($key) && $this->specialFilterService->has($table, $key)) {
                return $this->specialFilterService->handle($table, $key);
            }
        }

        // Requête simple si aucun filtre personnalisé
        return DB::table($table)->get();
    }
}
