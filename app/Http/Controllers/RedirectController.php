<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function check()
    {
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
