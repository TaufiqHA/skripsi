<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('autentikasi.login');
    }

    public function doLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required',
            'password' => 'required',
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        if(Auth::attempt($validated))
        {
            $request->session()->regenerate();

            if(auth()->user()->role_id === 1) {
                return redirect('/mahasiswa');
            } else if(auth()->user()->role_id === 2) {
                return redirect('/dosen');
            } else if(auth()->user()->role_id === 3) {
                return redirect('/kajur');
            } else if(auth()->user()->role_id === 4) {
                return redirect('/sekjur');
            } else {
                return redirect('/admin');
            }
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
