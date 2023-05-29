<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class student
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check()){
            return redirect()->route('/login');
        }

        $user=Auth::user();
        if ($user->role==0){
            return $next($request);
        }

        if ($user->role==3){
            return redirect()->route('/adminPanel');
        }

        if ($user->role==2){
            return redirect()->route('/supervisorPanel');
        }

        if ($user->role==1){
            return redirect()->route('/mentorPanel');
        }

        if ($user->role==4){
            return redirect()->route('/superAdminPanel');
        }
    }
}
