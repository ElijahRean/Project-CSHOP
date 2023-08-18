<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Prevent multiply access
    public function __construct()
    {
        $this->middleware('guest');
    }

    // Show login form
    protected function showLoginForm()
    {
        return view('layouts.login');
    }

    protected function login(Request $request)
    {
        // Validation
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/');
        }

        // Failed
        return back()->withErrors([
            'email' => 'Wrong data.',
        ]);
    }

    // Logout
    protected function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
