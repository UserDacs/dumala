<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserActive
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Check if the user is authenticated
        if (Auth::check()) {
            // Get the authenticated user
            $user = Auth::user();

            // If the user's status is not 'active', log them out and redirect
            if ($user->user_status !== 'active') {
                Auth::logout(); // Log the user out
                $request->session()->invalidate(); // Invalidate the session
                $request->session()->regenerateToken(); // Regenerate CSRF token

                // Redirect with an error message
                return redirect()->route('login')->withErrors(['user_status' => 'Your account is not active.']);
            }
        }

        // If the user is active, continue with the request
        return $next($request);
    }
}
