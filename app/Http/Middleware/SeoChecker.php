<?php

namespace App\Http\Middleware;

use App\Http\Seo\HomeHandler;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeoChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /* $routes = collect(\Route::getRoutes())->map(function ($route) {

            return $route->getName();

        })->toArray();*/
        $routes = collect(\Route::getRoutes())->reduce(function ($carry = [], $route) {

            Str::startsWith($route->getName(), ['voyager.', 'livewire', 'debugbar', 'ignition', 'feeds']) ?: $carry[] = $route->getName();

            return  $carry;
        });

        $Handler = ucfirst(request()->route()->getName());

        if (in_array(request()->route()->getName(), array_filter($routes))) {

            if (Str::endsWith(request()->route()->getName(), ['single', '.single'])) {

                $singleHandler = explode('.', $Handler);
            
                app("App\\Http\\Seo\\{$singleHandler[0]}Handler")->single($request->route()->parameters());
            } else {
                app("App\\Http\\Seo\\{$Handler}Handler");
            }
            // app("App\\Http\\Seo\\{$Handler}Handler");
        }

        return $next($request);
    }
}
