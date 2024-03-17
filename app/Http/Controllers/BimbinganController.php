<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BimbinganController extends Controller
{
    public function index()
    {
        $mahasiswa = auth()->user()->mahasiswa;
        $rooms = $mahasiswa->room;
        return view('mahasiswa.bimbingan', ['title' => 'Bimbingan', 'rooms' => $rooms, 'mahasiswa' => $mahasiswa]);
    }
}
