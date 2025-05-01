<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // ==================2==================
        // - Buat object mahasiswa dengan data dummy (nama, nim, email, jurusan, fakultas, foto)
        // - Kirim object tersebut ke view 'profil'

        $mahasiswa = (object) [
            'nama' => 'Faiz Ardhanu',
            'nim' => '102042300072',
            'email' => 'faizardhanu123@gmail.com',
            'jurusan' => 'S1 Sistem Informasi',
            'fakultas' => 'Fakultas Rekayasa Industri',
            'foto' => 'images/pasfoto pais.png' // simpan di public/images/
        ];

        return view('profil', compact('mahasiswa'));
    }
}
