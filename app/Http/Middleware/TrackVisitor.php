<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\Visitor;

class TrackVisitor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Don't track admin routes and API
        if (!$request->is('admin/*') && !$request->is('api/*')) {
            Visitor::create([
                'ip_address' => $request->ip(),
                'visited_page' => $request->fullUrl(),
                'user_agent' => $request->userAgent(),
                'visited_at' => now(),
            ]);
        }

        return $next($request);
    }
}
