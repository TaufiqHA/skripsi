<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use App\Models\SeminarProposal;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\Mail;
use App\Mail\EventProposal;

class SeminarProposalController extends Controller
{
    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'mahasiswa_id' => 'required',
            'tanggal' => 'required',
            'tempat' => 'required',
            'dosen_penguji1' => 'required',
            'dosen_penguji2' => 'required',
            'sk_penguji' => [
                'required',
                File::types('pdf')
                    ->min('1kb')
                    ->max('500kb')
            ] ,
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        $validated['sk_penguji'] = $validated['sk_penguji']->store('file');

        SeminarProposal::create($validated);

        $mahasiswa = Mahasiswa::find($request->mahasiswa_id);

        Mail::to($mahasiswa->user->email)->send(new EventProposal($mahasiswa));

        return back()->with('success', 'Berhasil menambahkan data');
    }
}
