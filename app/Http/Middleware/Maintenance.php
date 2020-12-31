<?php

namespace App\Http\Middleware;

use App;
use Closure;
use DB;

class Maintenance
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $Status = DB::table('Maintenance')->value('Status');

        if ($Status == "active") {
           //  redirect()->route('route.name', [$param]);

          return  redirect()->route('Maintenance.pag');
            //  dd("Catch errors for script and full tracking ( 1 )");
        }

        return $next($request);
    }
}
