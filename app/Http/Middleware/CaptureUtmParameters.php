<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CaptureUtmParameters
{
    const utm_handles = [
        'utm_source',
        'utm_medium',
        'utm_campaign',
        'utm_content',
    ];

    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        foreach(self::utm_handles as $utm) {
            if ($request->has($utm)) {
                session([$utm => $request->get($utm)]);
            }
        }
        return $next($request);
    }
}
