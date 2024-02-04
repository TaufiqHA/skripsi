<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\Judul;
use App\Models\Room;
use App\Models\Skripsi;
use Illuminate\Support\Facades\Validator;

class JudulController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::where('user_id', auth()->user()->id)->first();
        $dosen = Dosen::all();
        $judul = Judul::where('mahasiswa_id', $mahasiswa->id)->get();
        return view('judul.index', ['title' => 'Judul', 'mahasiswa' => $mahasiswa, 'dosen' => $dosen, 'juduls' => $judul]);
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

    public function aproveJudul(Judul $judul, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'judul_id' => 'required',
            'dospem1_id' => 'required',
            'dospem2_id' => 'required',
            'tanggal_disetujui' => 'required'
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        Skripsi::create($validated);

        Judul::where('id', $judul->id)->update(['status' => 'Diterima']);

        Mahasiswa::where('id', $judul->mahasiswa->id)->update(['statusTA' => 'Diterima']);

        Room::create(['mahasiswa_id' => $judul->mahasiswa->id, 'dosen_id' => $request->dospem1_id]);
        Room::create(['mahasiswa_id' => $judul->mahasiswa->id, 'dosen_id' => $request->dospem2_id]);

        $dosen1 = Dosen::find($request->dospem1_id);
        $mahasiswa = $judul->mahasiswa->id;
        $value = [$mahasiswa];
        $dosen1->mahasiswa()->attach($value);

        $dosen2 = Dosen::find($request->dospem2_id);
        $mahasiswa = $judul->mahasiswa->id;
        $value = [$mahasiswa];
        $dosen2->mahasiswa2()->attach($value);

        return redirect(route('kajur.judul'));

    }

    public function tolakJudul(Judul $judul, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'alasan_penolakan' => 'required'
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        Judul::where('id', $judul->id)->update(['status' => 'Ditolak', 'tanggal_ditolak' => now(), 'alasan_penolakan' => $validated['alasan_penolakan']]);
        return redirect(route('kajur.judul'));
    }
}
