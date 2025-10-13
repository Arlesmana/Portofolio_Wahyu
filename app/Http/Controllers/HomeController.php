<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\View\View;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'no_telp' => 'required|string',
            'pesan' => 'required|string',
        ]);

        Message::create([
            'tanggal_masuk' => now(),
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'no_telp' => $validated['no_telp'],
            'pesan' => $validated['pesan'],
        ]);

        return redirect()->route('home')->with('success', 'Pesan Anda telah terkirim. Terima kasih!');
    }
}