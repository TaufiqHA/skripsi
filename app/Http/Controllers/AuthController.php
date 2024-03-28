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

            $role = auth()->user()->role_id;

            switch ($role) {
                case '1':
                    return redirect('/mahasiswa');
                    break;
                case '2':
                    return redirect('/dosen');
                    break;
                case '3':
                    return redirect('/kajur');
                    break;
                case '4':
                    return redirect('/sekjur');
                    break;
                case '5':
                    return redirect('/admin');
                    break;
                    
            }
        } else {
            return back()->withInput()->withErrors([
                'errors' => 'Username atau kata sandi salah !!!'
            ]);
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
