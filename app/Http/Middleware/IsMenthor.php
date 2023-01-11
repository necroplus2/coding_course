<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Module;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class IsMenthor
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
        $idModule = Str::substr(request()->path(), 17, 1);
        $menthorId = Module::find($idModule)->menthor_id;

        if(auth()->user()->status == 'menthor' && auth()->user()->id !== $menthorId) {
            abort(403);
        }
    
        return $next($request);
    }
}
