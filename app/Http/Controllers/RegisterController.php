<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // Prevent multiple logins
    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function create(array $data) {

        // Create user
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // Validate user input
    protected function validator(array $data) {
        return Validator::make($data, [
            'username' => ['required','string','max:255'],
            'email' => ['required','string', 'email','max:255', 'unique:users'],
            'password' => ['required','string','min:6', 'confirmed'],
        ]);
    }

    protected function showRegistrationForm()
    {
        return view('layouts.register');
    }
}
