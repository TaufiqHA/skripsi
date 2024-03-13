<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mahasiswa_id' => 'required',
            'transkrip_nilai' => [
                'required',
                File::types(['pdf'])
                    ->min('1kb')
                    ->max('500kb')
            ],
            'test_turnitin' => [
                'required',
                File::types(['pdf'])
                    ->min('1kb')
                    ->max('500kb')
            ],
            'katrol_seminar' => [
                'required',
                File::types(['pdf'])
                    ->min('1kb')
                    ->max('500kb')
            ],
            'pengesahan' => [
                'required',
                File::types(['pdf'])
                    ->min('1kb')
                    ->max('500kb')
            ],
            'draft' => [
                'required',
                File::types(['pdf'])
                    ->min('1kb')
                    ->max('500kb')
            ],
            'jenis' => 'required'
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        $validated['transkrip_nilai'] = $request->file('transkrip_nilai')->store('file');
        $validated['test_turnitin'] = $request->file('test_turnitin')->store('file');
        $validated['katrol_seminar'] = $request->file('katrol_seminar')->store('file');
        $validated['pengesahan'] = $request->file('pengesahan')->store('file');
        $validated['draft'] = $request->file('draft')->store('file');

        Pengajuan::create($validated);

        return back()->with('success', 'Pengajuan seminar berhasil');
    }
}
