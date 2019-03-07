<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Log;

class LogQuery
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
        $res = $next($request);
        $queryLogs = \DB::getQueryLog();

        Log::debug(json_encode($queryLogs,JSON_PRETTY_PRINT));

        return $res;
    }
}
