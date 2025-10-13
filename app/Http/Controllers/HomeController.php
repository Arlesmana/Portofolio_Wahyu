<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class HomeController extends Controller
{
    /**
     * Method ini dipanggil oleh route / (halaman utama)
     */
    public function index()
    {
        // Ganti 'home' dengan nama file view untuk halaman utama Anda (misalnya 'welcome')
        return view('home'); 
    }

    /**
     * Method untuk menyimpan pesan dari form kontak
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string', // 'name' diubah ke 'nama' agar konsisten
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