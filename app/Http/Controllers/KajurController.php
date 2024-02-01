<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Judul;

class KajurController extends Controller
{
    public function index()
    {
        return view('kajur.index', ['title' => 'Dashboard']);
    }

    public function judul()
    {
        $judul = Judul::all();
        // dd($judul);
        return view('kajur.judul', ['title' => 'Tugas Akhir', 'juduls' => $judul]);
    }

    public function aprove(Judul $judul)
    {
        return view('kajur.aprove', ['title' => 'Tugas Akhir', 'judul' => $judul]); 
    }
}
