<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
    if (in_array($request->user()->role, $roles)) {
        return $next($request);
    }

    if ($request->user()->role == 'u') {
        return redirect('/u');
    }

    return redirect('/');
}

}
