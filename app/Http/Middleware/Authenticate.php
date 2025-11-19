<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     */
    protected function redirectTo(Request $request): ?string
    {
        // Si c'est une route API, on ne redirige jamais
        if ($request->is('api/*')) {
            return null; // Laravel renverra 401 au lieu de rediriger
        }
        return $request->expectsJson() ? null : route('login');
    }
}
