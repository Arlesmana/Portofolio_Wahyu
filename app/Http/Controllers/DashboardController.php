<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        // Ambil data pesan dari database, sesuaikan dengan model Anda
        $messages = \App\Models\Message::all(); // Ganti dengan model yang sesuai

        // Kirim ke view
        return view('dashboard.main', compact('messages'));
        
    }
    public function destroy(Message $message)
{
    // BENAR: Memanggil method delete pada objek $message yang sudah ditemukan
    $message->delete();

    return redirect()->route('dashboard')->with('success', 'Pesan berhasil dihapus!');
}
}
