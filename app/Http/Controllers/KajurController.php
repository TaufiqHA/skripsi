<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Judul;
use App\Models\Kajur;
use App\Models\Dosen;
use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

class KajurController extends Controller
{
    public function index()
    {
        return view('kajur.index', ['title' => 'Dashboard']);
    }

    public function judul()
    {
        $judul = Judul::paginate(5);
        // dd($judul);
        return view('kajur.judul', ['title' => 'Tugas Akhir', 'juduls' => $judul]);
    }

    public function downloadBukti(Judul $judul)
    {
        return response()->download('storage/' . $judul->bukti, 'Bukti konsultasi ' . $judul->mahasiswa->nama . '.pdf');
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
        $fakultas = Fakultas::all();
        $jurusan = Jurusan::all();
        return view('kajur.distribusi', ['title' => 'Distribusi dosen', 'dosens' => $dosens]);
    }

    public function distribusi2()
    {
        $dosens = Dosen::all();
        return view('kajur.distribusi2', ['title' => 'Distribusi dosen', 'dosens' => $dosens]);
    }

    public function search(Request $request)
    {   
        if($request->has('search'))
        {
            $juduls = Judul::where('judul', 'LIKE', '%'.$request->search.'%')->orWhereHas('mahasiswa', function ($query) use ($request) {
            $query->where('nama', 'like', "%$request->search%");
            })->orWhere('status', 'LIKE', '%'.$request->search.'%')->paginate(5);
        } else {
            $juduls = Judul::paginate(5);
        }
        return view('kajur.judul', ['title' => 'Tugas akhir', 'juduls' => $juduls]);
    }

    public function statusFilter(Request $request)
    {
        $juduls = Judul::where('status', 'LIKE', "%$request->search%")->get();
    }

    public function profileMahasiswa(Mahasiswa $mahasiswa)
    {
        $jurusan = Jurusan::all();
        $fakultas = Fakultas::all();
        $dosen = Dosen::all();
        $user = User::find($mahasiswa->user_id);
        return view('kajur.profileMahasiswa', ['title' => 'Profile Mahasiswa', 'mahasiswa' => $mahasiswa, 'fakultas' => $fakultas, 'jurusan' => $jurusan, 'dosen' => $dosen, 'user' => $user]);
    }
}
