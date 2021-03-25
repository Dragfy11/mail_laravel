<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class isAuthor
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
     
        $postUserId = $request->route()->parameters()['post']->user_id;
        if (Auth::check() && Auth::user()->role_id == 1 || Auth::check() && Auth::id() == $postUserId ) {
            return $next($request);
        }else{
            return redirect()->back();
        }
    }
}
