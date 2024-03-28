<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedirectController extends Controller
{
    public function check()
    {
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
    }
}
