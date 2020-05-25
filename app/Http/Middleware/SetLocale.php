<?php

namespace App\Http\Middleware;

use Closure;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $fullLocaleHeader = $request->header('accept-language');

        $lang = explode('-', $fullLocaleHeader)[0];

        if ($lang) {
            \App::setLocale($lang);
        }

        return $next($request);
    }
}
