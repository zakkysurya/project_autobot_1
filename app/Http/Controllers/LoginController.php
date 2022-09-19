<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {   
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|string'
        ]); 

        // if ($validator->fails()) {
        //     $request->session()->flash('error', 'email atau password tidak boleh kosong' );
        //     return back();
        // }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        }
        return back()->with('error', 'email atau password salah...' );
    }


    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }

}
