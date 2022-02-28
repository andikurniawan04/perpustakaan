<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register', [
            'title' => 'Register',
            'active' => 'register',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:255',
        ]);

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'status' => "anggota",
            'password' => $request->password
        ]);

        $request->session()->flash('success', 'Registration success! Please Login');

        return redirect('/login');
    }
}
