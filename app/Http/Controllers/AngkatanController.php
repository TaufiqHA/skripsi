<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Angkatan;

class AngkatanController extends Controller
{
    public function add(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'angkatan' => 'required'
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        Angkatan::create($validated);

        return back()->with('success', 'Berhasil menambahkan angkatan');
    }
}
