<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class isLoggedIn
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
        if (Auth::check()) {
            return $next($request);
       }
       toastr()->error('You need to be logged in to do that.', 'Error');
       return redirect('login');
    }
}
