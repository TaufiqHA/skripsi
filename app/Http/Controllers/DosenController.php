<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return view('dosen.index', ['title' => 'Dashboard']);
    }

    public function bimbingan()
    {
        $dosen = auth()->user()->dosen;
        $rooms = $dosen->room;
        return view('dosen.bimbingan', ['title' => 'Bimbingan', 'rooms' => $rooms]);
    }
}
