<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Set timezone ke Asia/Jakarta
        date_default_timezone_set('Asia/Jakarta');

        // - Buat variabel nama, jam, waktu
        $nama = "Faiz"; // Ganti sesuai namamu
        $jam = date('H'); // format 2 digit jam
        $waktuAkses = date('H:i:s');

        // - Tentukan $salam berdasarkan jam (pagi, siang, sore, malam)
        $salam = match (true) {
            $jam >= 5 && $jam < 12 => 'Selamat Pagi',
            $jam >= 12 && $jam < 15 => 'Selamat Siang',
            $jam >= 15 && $jam < 18 => 'Selamat Sore',
            default => 'Selamat Malam',
        };

        // - Panggil fungsi getTanggal()
        $tanggal = $this->getTanggal();

        // - Kirim data ke view 'dashboard' 
        return view('dashboard', compact('nama', 'salam', 'waktuAkses', 'tanggal'));
    }

    private function getTanggal()
    {
        // ==================3==================
        // - Kembalikan tanggal sekarang dalam format dd-mm-yyyy
        return date('d-m-Y');
    }
}
