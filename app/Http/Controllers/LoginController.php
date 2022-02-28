<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', '=', $request->email)->Where('password', '=', $request->password)->first();
        if (Auth::login($user)) {
            $request->session()->regenerate();
            if (Auth::user()->status == 'petugas') {
                return redirect()->intended('/');
            } else if (Auth::user()->status == 'anggota') {
                return redirect()->intended('/home');
            } else {
                return redirect('/login');
            }
        } else {
            return back()->with('Gagal', 'Login failed!');
        }




        // if ($user) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }
        // dd(Auth::loginUsingId($user->id, TRUE));


        // if (Auth::attempt($credentials)) {
        //     $request->session()->regenerate();
        //     return redirect()->intended('/');
        // }


    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
