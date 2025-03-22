<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('login.show');
    }

    public function login(Request $request)
    {
        $login = $request->email;
        $password = $request->password;
        $credentials = ['email' => $login, 'password' => $password];

        if (Auth::attempt($credentials)) {
            // connecter
            $request->session()->regenerate();
            return to_route('homepage')->with('success', 'connected ' . $login);
        } else {
            // échec
            return back()->withErrors([
                'email' => 'Adresse email ou mot de passe incorrect',
            ])->onlyInput('email');
        }
    }
}
