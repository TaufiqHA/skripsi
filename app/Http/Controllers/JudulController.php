<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Judul;
use Illuminate\Support\Facades\Validator;

class JudulController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::where('user_id', auth()->user()->id)->first();
        $dosen = Dosen::all();
        $judul = Judul::where('mahasiswa_id', $mahasiswa->id)->get();
        return view('judul.index', ['title' => 'Judul', 'mahasiswa' => $mahasiswa, 'dosen' => $dosen, 'judul' => $judul]);
    }

    public function addJudul(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mahasiswa_id' => 'required',
            'judul' => 'required',
            'konsentrasi' => 'required',
            'metode' => 'required',
            'teknik' => 'required',
            'bentuk_data' => 'required',
            'tempat' => 'required',
            'nama_dosen1' => 'required',
            'nama_dosen2' => 'required',
            'nama_dosen3' => 'required',
            'nama_dosen4' => 'required',
            'status' => 'required',
            'tanggal_pengajuan' => 'required'
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        Mahasiswa::where('id', $request->mahasiswa_id)->update(['statusTA' => 'Diajukan']);

        if($request->file('bukti'))
        {
            $validated['bukti'] = $request->file('bukti')->store('file');
        }

        Judul::create($validated);

        return back()->with([
            'success' => 'Judul berhasil diajukan'
        ]);
    }
}
