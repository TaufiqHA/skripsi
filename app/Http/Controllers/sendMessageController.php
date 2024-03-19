<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendMessageController extends Controller
{
    public function send(Request $request)
    {
        $number = $request->number;
        $message = $request->message;

        $number = preg_replace('/^0/', '62', $number);

        return redirect("https://api.whatsapp.com/send?phone=$number&text=$message");
    }
}
