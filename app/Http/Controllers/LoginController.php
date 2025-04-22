<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function username()
    {
        return 'username';
    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'max:255']
        ]);

        $credentials = [
            'username' => $request->username,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended()->with([
                'status' => 'success',
                'message' => 'welcome to ' . env('APP_NAME')
            ]);
        }

        return redirect()->route('login')->with([
            'status' => 'error',
            'message' => 'Invalid username or passwrod!'
        ]);
    }
}
