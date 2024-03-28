<?php

namespace App\Http\Middleware;

use Closure;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Featured;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ShareDataMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $headerData = Category::all(); // Fetch header data from the database
        $featured = Featured::where('featured','=','Main')->with('news',fn($q) => $q->where('status','published')->latest()->take(3))->first();

        // Share header data with Inertia
        Inertia::share([
            'headerData' => $headerData,
            'featured' => $featured
        ]);
        return $next($request);
    }
}
