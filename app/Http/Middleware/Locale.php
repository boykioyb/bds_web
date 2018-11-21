<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Routing\Redirector;

class Locale
{
    private $app;
    public function __construct(Application $app)
    {
        $this->app = $app;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $locale = $request->segment(1);
        if (!array_key_exists($locale, config('app.locales'))) {
            $segments = $request->segments();
            $segments[0] = config('app.fallback_locale');
            $locale = $segments[0];
            return redirect($locale);
        }

        $this->app->setLocale($locale);

        return $next($request);
    }
}
