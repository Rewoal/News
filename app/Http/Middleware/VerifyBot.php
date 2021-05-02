<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerifyBot
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
        if($request->request("hub_mode") === "subscribe" && $request->request("hub_verify_roken") === env("<MESSENGER_VERIFY_TOKEN")){
            return response($request->request("hub_challenge"), 200);
        }
        return $next($request);
    }
}
