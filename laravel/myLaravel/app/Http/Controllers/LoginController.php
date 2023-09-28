<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //

    public function login()
    {
        // return Hash::make('test');
        return view('login');
    }
    public function attempt(Request $r)
    {
        $data = $r->except("_token");
        // return $data;
        if (Auth::attempt($data)) {
            $r->session()->regenerate();
            return redirect()->intended('/category');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login')->withErrors(["msg" => 'Logout successfull.']);
    }
}
