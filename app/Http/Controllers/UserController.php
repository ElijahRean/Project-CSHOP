<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{

    public function index(): View
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }

    public function create(): View
    {
        return view('admin.user_edit', ['user' => []]);
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        User::create($request->post());

        return redirect()->route('admin.user.index')->with('status','User has been created successfully.');
    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('admin.user.index')
            ->with('success','Company has been deleted successfully');
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
