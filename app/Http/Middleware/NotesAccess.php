<?php

namespace App\Http\Middleware;

use App\Models\notes;
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
        $NoteCreator=notes::find($request->route('id'))->creater;
      
        if (auth()->user()->id == $NoteCreator) {
            return $next($request);
        }
       // abort(403);
         return response()->json(['error' => ' Not  Authorized .. '], 403);

    }
}
