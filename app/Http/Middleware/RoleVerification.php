<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleVerification
{
    public function handle($request, Closure $next)
    {
        if (!Auth::check())
            return redirect('login');

        $user = Auth::user();

        if ($user->roles_id === 1)
            return $next($request);
        else if ($user->roles_id === 2)
            return redirect('login');
        else if ($user->roles_id === 3)
            return redirect('login');
        else
            return redirect('login');
    }
}
