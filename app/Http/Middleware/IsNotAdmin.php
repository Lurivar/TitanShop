<?php

namespace App\Http\Middleware;

use App\Models\Administrator;
use Closure;
use \Illuminate\Http\Request;

class IsNotAdmin
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
        if (! \App\Models\Administrator::check($request)) {
            return $next($request);
        }

        return redirect(route('admin.homepage'));
    }
}