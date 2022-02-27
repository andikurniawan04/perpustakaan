<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CekStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, ...$status)
    {
        if (in_array($request->user()->status, $status)) {
            return $next($request);
        }
        if (Auth::user()->status == 'petugas') {
            return redirect('/');
        } elseif (Auth::user()->status == 'anggota') {
            return redirect('/home');
        } else {
            return redirect('/login');
        }
    }
}
