<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate
{
    public function handle($request, Closure $next)
    {
        // Pengecualian untuk rute login, register, dan halaman utama
        $exceptRoutes = ['login', 'register', '/'];

        if (in_array($request->path(), $exceptRoutes)) {
            return $next($request);
        }

        // Jika belum login, redirect ke login dengan flash message
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Silakan login terlebih dahulu!');
        }

        return $next($request);
    }
}

