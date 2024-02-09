<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Facades\Validator;

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

    public function data(Dosen $dosen)
    {
        return view('dosen.data', ['title' => 'Data diri', 'dosen' => $dosen]);
    }

    public function update(Request $request, Dosen $dosen)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nip' => 'required',
            'jabatan' => 'required',
            'kategori' => 'required',
            'status' => 'required',
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        Dosen::where('id', $dosen->id)->update($validated);

        return back()->with([
            'success' => 'Berhasil menambahkan data'
        ]);
    }
}
