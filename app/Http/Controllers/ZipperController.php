<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use ZipArchive;

class ZipperController extends Controller
{
    public function downloadZip(Pengajuan $pengajuan)
    {
        $zip = new ZipArchive;
        $zipFileName = 'berkas '. $pengajuan->mahasiswa->nama . '.zip';

        if($zip->open(public_path($zipFileName), ZipArchive::CREATE) === true)
        {
            $zip->addFile('storage/' . $pengajuan->transkrip_nilai, 'transkrip nilai ' . $pengajuan->mahasiswa->nama . '.pdf');
            $zip->addFile('storage/' . $pengajuan->test_turnitin, 'test turnitin ' . $pengajuan->mahasiswa->nama . '.pdf');
            $zip->addFile('storage/' . $pengajuan->katrol_seminar, 'katrol seminar ' . $pengajuan->mahasiswa->nama . '.pdf');
            $zip->addFile('storage/' . $pengajuan->pengesahan, 'lembar pengesahan ' . $pengajuan->mahasiswa->nama . '.pdf');
            $zip->addFile('storage/' . $pengajuan->draft, 'draft proposal ' . $pengajuan->mahasiswa->nama . '.pdf');

            $zip->close();
        }

        return response()->download(public_path($zipFileName))->deleteFileAfterSend(true);
    }
}
