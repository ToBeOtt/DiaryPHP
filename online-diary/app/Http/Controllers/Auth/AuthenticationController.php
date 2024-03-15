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
        $credentials = $request->only('email', 'password');

        Log::info('Attempting to authenticate user...');

        if (Auth::attempt($credentials)) {
            Log::info('User authenticated successfully');
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials is not correct.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        Log::info('User logged out successfully');

        return redirect('/login');
    }
}
