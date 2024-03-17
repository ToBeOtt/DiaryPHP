<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class AuthenticationController extends Controller
{
    public function login(Request $request)
    {
        // Here I choose to just pick email and password from request, and disregard for example
        // tokens etc.
        $credentials = $request->only('email', 'password');

        Log::info('Attempting to authenticate user...');

        if (Auth::attempt($credentials)) {
            Log::info('User authenticated successfully');
            return redirect()->intended('/');
        }

        // Validation error, since I dont want the user to know what is failing in order to
        // provide too much info for malicious use, I keep the error vague and general.
        return back()->withErrors([
            'email' => 'The provided credentials is not correct.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        // Terminates current session, thus invalidate the authenticated user.
        $request->session()->invalidate();

        // Regenerates the CSRF to protect against cross-site request forgery
        $request->session()->regenerateToken();

        Log::info('User logged out successfully');

        return redirect('/login');
    }
}
