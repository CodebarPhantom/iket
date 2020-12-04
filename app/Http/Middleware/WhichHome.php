<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

class WhichHome
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle()
    {
        if(Auth::user() && (Auth::user()->role == 'USER'))
            return redirect('/');
        elseif(Auth::user() && (Auth::user()->role == 'TECHNICIAN'))
            return redirect('/t');
        elseif(Auth::user() && (Auth::user()->role == 'MANAGER'))
            return redirect('/m');
        return response('Unauthorized. <a href="javascript:history.back()">Go Back</a>', 401);
    }
}
