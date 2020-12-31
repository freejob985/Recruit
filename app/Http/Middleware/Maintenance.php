<?php

namespace App\Http\Middleware;

use Closure;
use App;
use Session;
use Config;
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

        if($Status=="Status"){
            dd("Catch errors for script and full tracking ( 1 )");
        }
        else{
           // dd("Catch errors for script and full tracking ( 2 )");
            $locale = 'sa';
        }

       
        return $next($request);
    }
}
