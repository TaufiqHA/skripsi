<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Judul;
use App\Models\Kajur;
use App\Models\Dosen;
use Illuminate\Support\Facades\Validator;

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

    public function data(Kajur $kajur)
    {
        return view('kajur.data', ['title' => 'Data diri', 'kajur' => $kajur]);
    }

    public function update(Request $request, Kajur $kajur)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nip' => 'required',
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        Kajur::where('id', $kajur->id)->update($validated);

        return back()->with([
            'success' => 'Data berhasil ditambahkan'
        ]);
    }

    public function distribusi()
    {
        $dosens = Dosen::all();
        return view('kajur.distribusi', ['title' => 'Distribusi dosen', 'dosens' => $dosens]);
    }

    public function distribusi2()
    {
        $dosens = Dosen::all();
        return view('kajur.distribusi2', ['title' => 'Distribusi dosen', 'dosens' => $dosens]);
    }
}
