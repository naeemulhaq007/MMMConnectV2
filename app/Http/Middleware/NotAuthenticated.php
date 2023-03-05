<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NotAuthenticated {

    public function handle(Request $request, Closure $next): Response
    {
        if ($request->session()->has("id")) {
            return redirect("/feed");
        }

        return $next($request);
    }

}
