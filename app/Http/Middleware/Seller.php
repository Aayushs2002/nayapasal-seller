<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class Seller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {


        $user = Auth::guard('seller')->user();
        if (!$user) {
            return redirect()->route('seller.login')->with('poperror', 'Unauthorized');
        }

        if ($user->active == "0") {
            Auth::guard('seller')->logout();
            return redirect()->route('seller.login')->with('poperror', 'Your account is inactive. Please contact support.');
        }

        // if (!Auth::guard("seller")->user()) {
        //     return redirect()->route('seller.login')->with('poperror', 'Unauthorized');
        // }
        return $next($request);
    }
}
