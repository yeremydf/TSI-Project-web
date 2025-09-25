<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Libro;
class AuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!$request->session()->has('user_id')) {
            return redirect()->route('home');
        }

        return $next($request);
    }
    public function index()
    {
        $libros = Libro::with('autor', 'genero')->get();
        return view('home', compact('libros'));
    }
}