<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Dosen;
use App\Models\User;
use App\Models\Judul;
use App\Models\Angkatan;

class AdminController extends Controller
{
    public function index()
    {
        // dd(auth()->user()->admin);
        return view('admin.index', ['title' => 'Dashboard']);
    }

    public function mahasiswa()
    {
        $mahasiswa = Mahasiswa::paginate(10);
        $angkatan = Angkatan::all();
        return view('admin.mahasiswa', ['title' => 'List Mahasiswa', 'mahasiswa' => $mahasiswa, 'angkatan' => $angkatan]);
    }

    public function profileMahasiswa(Mahasiswa $mahasiswa)
    {
        $dosen = Dosen::where('id', $mahasiswa->dosen_pa)->first();
        $user = User::find($mahasiswa->user_id);
        return view('admin.profileMahasiswa', ['title' => $mahasiswa->nama, 'mahasiswa' => $mahasiswa, 'dosen' => $dosen, 'user' => $user]);
    }

    public function search(Request $request)
    {   
        if($request->has('search'))
        {
            $mahasiswa = Mahasiswa::where('nama', 'LIKE', '%'.$request->search.'%')->paginate(10);
        } else {
            $mahasiswa = Mahasiswa::paginate(10);
        }
        $angkatan = Angkatan::all();
        return view('admin.mahasiswa', ['title' => 'List Mahsiswa', 'mahasiswa' => $mahasiswa, 'angkatan' => $angkatan]);
    }

    public function filter(Request $request)
    {
        if($request->has('search'))
        {
            $mahasiswa = Mahasiswa::where('angkatan', 'LIKE', '%'.$request->search.'%')->paginate(10);
        } else {
            $mahasiswa = Mahasiswa::paginate(10);
        }
        $angkatan = Angkatan::all();
        return view('admin.mahasiswa', ['title' => 'List Mahsiswa', 'mahasiswa' => $mahasiswa, 'angkatan' => $angkatan]);
    }
}
