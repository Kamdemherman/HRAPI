<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RejectEmptyBody
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (in_array($request->method(), ['POST', 'PUT', 'PATCH']) && empty($request->all())&&
        empty($request->getContent())
        
        ) {
            return response()->json([
                'error' => 'Le corps de la requête est vide. Veuillez fournir des données.'
            ], 400);
        }

        return $next($request);
    }
}
