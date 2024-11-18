<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class GuestController extends Controller
{
    public function signup() {
        return view('signup');
    }
    public function login() {
        return view('index');
    }

    public function register(Request $request) {
        $request->validate([
            'full_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|unique:users',
            'login' => 'required|string|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'login' => $request->login,
            'password' => $request->password,
        ]);

        return redirect()->route('login')->with('message', 'Вы успешно зарегистрировались');
    }

    public function auth(Request $request) {
        
    }
}
