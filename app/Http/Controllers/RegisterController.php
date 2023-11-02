<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Register;

class RegisterController extends Controller
{
    public function create()
    {
        return view('/register');
    }

    public function store(Request $request)
    {
        
        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials, $request->filled('remember'))){
            $request->session()->regenerate();
            return redirect()->intende('/');
        }

        return back->withErrors([
            'email' => 'the provided credentials do not match our record.',
        ]);
    }
}
