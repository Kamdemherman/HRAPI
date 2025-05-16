<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;


class CheckHttpMethod
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    protected $allowedMethods = [
        'index' => 'GET',
        'show' => 'GET',
        'store' => 'POST',
        'update' => 'PUT',
        'destroy' => 'DELETE',
    ];

    public function handle(Request $request, Closure $next)
    {
        // On devine l'action en fonction de la route
        $action = $request->route()->getActionMethod(); // ex: index, store, update, etc.
        $method = strtoupper($request->getMethod());

        if (!array_key_exists($action,$this->allowedMethods) || $method !== $this->allowedMethods[$action]) {
           
            return response()->json([
                'error' => "Méthode HTTP incorrecte. Attendu: {$action}, reçu: $method"
            ], 405); // 405 Method Not Allowed
        }
 
         return $next($request);
     }
}
