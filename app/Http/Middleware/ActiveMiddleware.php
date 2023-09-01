<?php

namespace App\Http\Middleware;

use App\Models\SiteData;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class ActiveMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (class_exists('\App\Models\SiteData') && SiteData::find(1)->status == 0){
            if (Auth::user()->role != 2){
                return $next($request);
            }
        }
        return redirect()->route('home');
    }
}
