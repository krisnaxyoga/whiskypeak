<?php

namespace App\Http\Controllers\User\Undangan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UndanganController extends Controller
{

    public function index()
    {
        // Variabel-variabel dari kode HTML Anda
        $undangan_pengaturan = []; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $users_order_musik = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $kunci = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $musiknya = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $kitaPNG = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $groomPNG = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $bridePNG = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $invite = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $website_umum = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $daftar_bank_pengguna = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda
        $domain = " "; // Isi variabel ini sesuai dengan logika aplikasi Anda

        // Inisialisasi array kosong untuk variabel yang merupakan hasil perulangan
        $users_mempelai = [];
        $users_album = [];
        $users_album_video = [];
        $users_doa_dan_ucapan = [];
        $tamu_undangan = [];

        return view('theme.defautlt', compact(
            'undangan_pengaturan',
            'users_order_musik',
            'kunci',
            'musiknya',
            'kitaPNG',
            'groomPNG',
            'bridePNG',
            'users_mempelai',
            'invite',
            'website_umum',
            'daftar_bank_pengguna',
            'users_album',
            'users_album_video',
            'users_doa_dan_ucapan',
            'domain',
            'tamu_undangan'
        ));
    }
}
