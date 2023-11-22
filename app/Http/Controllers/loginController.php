<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class loginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        //! #4 Validasi email dan password
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
            // 'g-recaptcha-response' => 'required|recaptcha'
        ]);

        //dd("cekvalidasi");

        //! #5 Masuk ke dashboard jika berhasil login
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();
            // dd("Ok Login");
            return redirect()->intended('/produkhukum');
        }

        // dd('error login');
        return back()->with('loginError', 'Pastikan email dan password anda benar!');
    }

    public function logout()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        // return redirect('login');
        return redirect()->route('lpprodukhukum');
    }
}
