<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!(auth()->user()->level >= 4)) {

            return Redirect::route('home')->with('error', 'You are not authorized for this action.')->with('error', 'You are not authorized for this action.')->with('error', 'You are not authorized for this action.')->with('error', 'You are not authorized for this action.');
        }

        return $next($request);
    }
}
