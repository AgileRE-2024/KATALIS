<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facades\Auth;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (Auth::guard('web')->check()) {
                return route('dashboard');
            }

            if (Auth::guard('dosen')->check()) {
                return route('dashboardDosen');
            }

            if (Auth::guard('koordinator')->check()) {
                return route('dashboardKoor');
            }

            return route('loginfix');
        }
    }
}
