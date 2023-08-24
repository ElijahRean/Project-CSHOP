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

    // Show all users
    public function index(Request $request): View
    {
        $sortColumn = $request->query('sort', 'id');
        $sortOrder = $request->query('order', 'asc');

        $users = User::orderBy($sortColumn, $sortOrder)->get();

        return view('admin.users.list', compact('users', 'sortColumn', 'sortOrder'));
    }

    // Show edit form
    //     public function edit(User $user)
    // {
    //     return view('admin.users.edit', compact('user'));
    // }

    // Update user
    // public function update(Request $request, string $id)
    // {
    //     $data = $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'confirmed', Password::defaults()],
    //     ]);

    //     $user = User::find($id);
    //     $user->update($data);

    //     return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    // }


    // public function create(): View
    // {
    //     return view('admin.user_edit', ['user' => []]);
    // }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);
        // dd($request->post());

        User::create($request->post());


        return redirect()->route('admin.users.index')->with('status','User has been created successfully.');
    }


    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'User deleted successfully');
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
