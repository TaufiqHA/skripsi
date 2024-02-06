<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\File;
use App\Models\Revisi;

class RoomController extends Controller
{
    public function uploadDraft(Room $room, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'draft' => [
                'required',
                File::types(['pdf'])
            ]
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        $validated['draft'] = $request->file('draft')->store('file');

        Room::where('id', $room->id)->update($validated);

        return back()->with([
            'success' => 'draft berhasil dikirim dan menunggu konfirmasi dari dosen pembimbing'
        ]);
    }

    public function dosen(Room $room)
    {
        return view('dosen.room', ['title' => 'Bimbingan', 'room' => $room]);
    }

    public function download(Room $room)
    {
        return response()->download('storage/' . $room->draft, 'Draft Proposal ' . $room->mahasiswa->nama . '.pdf');
    }

    public function revisi(Room $room, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'revisi' => 'required',
            'room_id' => 'required',
            'tanggal_revisi' => 'required'
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        Revisi::create($validated);

        return back()->with([
            'success' => 'revisi berhasil ditembahkan'
        ]);
    }
}
