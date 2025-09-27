<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'nama'   => 'required|string|max:255',
            'email'  => 'required|email',
            'subjek' => 'required|string|max:255',
            'pesan'  => 'required|string',
        ]);

        $data = [
            'nama'   => $request->nama,
            'email'  => $request->email,
            'subjek' => $request->subjek,
            'pesan'  => $request->pesan,
        ];

        Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->to('inuriadi73@gmail.com')
                    ->subject('Pesan Baru dari Website: ' . $data['subjek']);
        });

        return back()->with('success', 'Pesan berhasil dikirim! Terima kasih.');
    }
}
