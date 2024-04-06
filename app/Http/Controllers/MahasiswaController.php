<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\Fakultas;
use App\Models\Jurusan;
use App\Models\Dosen;
use App\Models\Room;
use App\Models\Judul;
use App\Models\Message;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    public function index()
    {

        $pesan = auth()->user()->mahasiswa->message;
        $revisi = auth()->user()->mahasiswa->room;

        $empty_pesan = true;

        if(count($pesan) === 0)
        {
            $empty_pesan = false;
        } else {
            $empty_pesan = true;
        }

        $empty_revisi = false;

        if(count($revisi) === 0)
        {
            $empty_revisi = true;
        } else {
            foreach($revisi as $room)
            {
                if(count($room->revisi) === 0)
                {
                    $empty_revisi = true;
                    break;
                } else {
                    $empty_revisi = false;
                    break;
                }
            }
        }

        return view('mahasiswa.index', ['title' => 'Dashboard', 'pesan' => $pesan, 'emptyPesan' => $empty_pesan, 'revisi' => $revisi, 'emptyRevisi' => $empty_revisi]);
    }

    public function showData(Mahasiswa $mahasiswa)
    {
        $fakultas = Fakultas::all();
        $jurusan = Jurusan::all();
        $dosen = Dosen::all();
        return view('mahasiswa.data', ['title' => 'Data diri', 'mahasiswa' => $mahasiswa, 'jurusan' => $jurusan, 'fakultas' => $fakultas, 'dosen' => $dosen]);
    }

    public function updateData(Request $request, Mahasiswa $mahasiswa)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'nim' => 'required',
            'sks' => 'required',
            'tanggal_ta' => 'required',
            'angkatan' => 'required',
            'surah' => 'required',
            'ipk' => 'required',
            'hp' => 'required',
            'dosen_pa' => 'required',
            'jurusan' => 'required',
            'fakultas' => 'required',
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        Mahasiswa::where('id', $mahasiswa->id)->update($validated);

        return back()->with([
            'success' => 'berhasil update data'
        ]);
    }

    public function room(Room $room)
    {
        return view('mahasiswa.room', ['title' => 'Bimbingan', 'room' => $room]);
    }

    public function sempro(Mahasiswa $mahasiswa)
    {
        $fakultas = Fakultas::all();
        $jurusan = Jurusan::all();
        $dosen = Dosen::all();
        $judul = Judul::where('id', $mahasiswa->id)->where('status', 'Diterima')->first();
        $room = auth()->user()->mahasiswa->room;

        $statusPengajuan = false;

        if(isset(auth()->user()->mahasiswa->pengajuan))
        {
            $statusPengajuan = true;
        }

        $statusList = [];
        $status = false;

        foreach ($room as $item) {
            $statusList[] = $item->status;
        }

        if(in_array(null, $statusList) || empty($statusList)) {
            $status = false;
        } else {
            $status = true;
        }

        return view('seminar.proposal', ['title' => 'Seminar Proposal', 'mahasiswa' => $mahasiswa, 'fakultas' => $fakultas, 'jurusan' => $jurusan, 'dosen' => $dosen, 'judul' => $judul, 'status' => $status, 'statusPengajuan' => $statusPengajuan]);
    }

    public function hasil(Mahasiswa $mahasiswa)
    {
        $fakultas = Fakultas::all();
        $jurusan = Jurusan::all();
        $dosen = Dosen::all();
        $judul = Judul::where('id', $mahasiswa->id)->where('status', 'Diterima')->first();
        $judul2 = Judul::where('id', $mahasiswa->id)->get();
        return view('seminar.hasil', ['title' => 'Seminar Hasil', 'mahasiswa' => $mahasiswa, 'fakultas' => $fakultas, 'jurusan' => $jurusan, 'dosen' => $dosen, 'judul' => $judul, 'judul2' => $judul2]);
    }
}
