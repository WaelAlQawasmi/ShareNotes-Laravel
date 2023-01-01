<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NotesAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->user()->id == $request->creater) {
            return $next($request);
        }
        abort(403);
         return response()->json(['error' => ' Not  Authorized '], 403);

    }
}
