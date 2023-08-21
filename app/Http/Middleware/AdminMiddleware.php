<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AdminMiddleware
{

    public function handle(Request $request, Closure $next) {
        if(Auth::user() && Auth::user()->isAdmin == 1)  {
            return redirect()->route('admin');
            // return $next($request);
        }

        return response([
            'message' => 'You are not authorized to access this page'], 403);

    // return redirect()->route('login')->with('error', 'You are not authorized to access this page.');
    }
}
