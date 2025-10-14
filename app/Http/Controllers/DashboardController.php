<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Message;

class DashboardController extends Controller
{
    public function index()
    {
        $messages = Message::orderBy('tanggal_masuk', 'desc')->get();
        $totalMessages = Message::count(); // Hitung total semua pesan

        // Kirim kedua variabel ke view
        return view('dashboard.main', [
            'messages' => $messages,
            'totalMessages' => $totalMessages,
        ]);
    }
    public function destroy(Message $message)
{
    // BENAR: Memanggil method delete pada objek $message yang sudah ditemukan
    $message->delete();

    return redirect()->route('dashboard')->with('success', 'Pesan berhasil dihapus!');
    }
    
    public function totalMessages()
    {
        return Message::count();
    }   
}
