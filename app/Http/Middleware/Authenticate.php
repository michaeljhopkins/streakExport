<?php

namespace Sexport\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Sexport\Providers\StreakServiceProvider;

class Authenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->guest()) {
            if ($request->ajax() || $request->wantsJson()) {
                \Log::info('guest, provider not loaded');
                return response('Unauthorized.', 401);
            } else {
                \Log::info('guest, provider not loaded');
                return redirect()->guest('login');
            }
        }
        elseif (strlen(\Auth::user()->token) < 30 && !\Request::is('token')) {
            return redirect()->to('token');
        }
        else {
            #Application::getInstance()->register(StreakServiceProvider::class);
            \Log::info('not guest, provider loaded ln 35');
            #\App::register(StreakServiceProvider::class);

            return $next($request);
        }
    }
}
