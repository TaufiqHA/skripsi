<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Message;

class MessageController extends Controller
{
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'mahasiswa_id' => 'required',
            'pengirim' => 'required',
            'pesan' => 'required',
        ]);

        if($validator->fails())
        {
            return back()->withErrors($validator);
        }

        $validated = $validator->validate();

        Message::create($validated);

        return back()->with('success', 'Berhasil mengirim pesan');
    }

    public function open(Message $message)
    {
        $message->update(['is_open' => true]);

        return back();
    }
}
