<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\JsonResponse;

class SpecialFilterService
{
    public static function handle($table, array $query): JsonResponse|null
    {
        // Liste des filtres spéciaux autorisés
        $specialParams = [
            'emiters' => 'EMITER',
            'roles'   => 'NAME',
        ];

        foreach ($query as $param => $value) {
            // Si le paramètre est spécial
            if (array_key_exists($param, $specialParams)) {
                $column = $specialParams[$param];

                // Vérifie si la colonne existe bien dans la table
                if (!Schema::hasColumn($table, $column)) {
                    return response()->json([
                        'error' => "Le champ '$param' n'existe pas dans la table '$table'."
                    ], 400);
                }

                // Rejette les requêtes avec une valeur ex: ?emiters=1
                if (!is_null($value) && $value !== '') {
                    return response()->json([
                        'error' => "La requête '$param=$value' n'est pas autorisée. Utilisez simplement '?$param' sans valeur."
                    ], 400);
                }

                // Retourne les valeurs distinctes
                return response()->json(
                    DB::table($table)
                        ->select($column)
                        ->distinct()
                        ->whereNotNull($column)
                        ->orderBy($column)
                        ->get()
                );
            } else {
                // Le paramètre n'est pas reconnu comme filtre spécial
                return response()->json([
                    'error' => "Le champ '$param' n'existe pas dans la table '$table'."
                ], 400);
            }
        }

        // Aucun filtre spécial détecté
        return null;
    }
}
