<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $roles)
    {
        $roles = explode('|', $roles);

        if (Auth::check() && Auth::user()->hasRole($roles)) {
            return $next($request);
        }

        abort(403);
    }

}
