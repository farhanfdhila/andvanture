<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoryController extends Controller
{
    public function index()
    {
        // Ini buat nampilin halaman utama (welcome.blade.php)
        return view('welcome');
    }

    public function show($slug)
    {
        // 1. Siapin data ceritanya (Nanti ini diganti pakai query Database)
        $ceritaGunung = [
            'gunung-merbabu' => [
                'nama' => 'GUNUNG MERBABU',
                'cerita' => 'Pendakian ke gunung merbabu ini First 3000 MDPL gue. Puncak Merbabu ada beberapa, tetapi puncak sejatinya ada di 3145 MDPL yaitu puncak Triangulasi!',
                // === TAMBAHAN BARU ===
                'mots' => 'love the life you live, live the life you love',
                'foto1' => 'merbabu1-a.jpg', // Pastiin file ada di public/images
                'foto2' => 'merbabu1-b.jpg',
            ],
            'gunung-pangrango' => [
                'nama' => 'GUNUNG PANGRANGO',
                'cerita' => 'Yang awalnya mau ke gunung gede, tapi gajadi karena ditutup akhirnya ke Puncak pangrango. Track yang gila. Vegetasi rapet, elevasi terjal, jalur yang dominan akar gede gede. Pokonya Top 2 Jawa Barat Gokill!',
                // === TAMBAHAN BARU ===
                'mots' => 'kita memang gaabadi, tapi kita usahakan selalu ada untuk wakdu yang sementara',
                'foto1' => 'pangrango-1.jpg', 
                'foto2' => 'pangrango-2.jpg',
            ],
            'gunung-salak-1' => [
                'nama' => 'GUNUNG SALAK 1',
                'cerita' => 'Kalo Ini first time gua hiking wkwk. Gunung salak yang katanya mistis namun nyatanya hutan tropisnya yang eksotis. Tracknya Hampir sama kaya gunung pangrango, tapi lebih pendek dan lebih santai ajaa hahaha',
                // === TAMBAHAN BARU ===
                'mots' => 'love yourself as you love her',
                'foto1' => 'salakk1.jpg',
                'foto2' => 'salakkk1.jpg',
            ],
            'gunung-salak-2' => [
                'nama' => 'GUNUNG SALAK 2',
                'cerita' => 'nah kalo ini yang kedua kalinya ke gunung salak, tapi jalurnya beda. disalak 2 ini ada 2 puncak yaitu Puncak Fajar Kencana 1917 MDPL & Puncak Prabu 2180 MDPL, Jalur yang ini lebih pendek, tapi tracknya lebih ekstrim dan lebih seru Jalur yang ini juga lebih sepi, jadi bisa lebih menikmati suasana hutan tropisnya yang eksotis.',
                // === TAMBAHAN BARU ===
                'mots' => 'kembali jika tak mampu',
                'foto1' => 'salak2-a.jpg',
                'foto2' => 'salak2-b.jpg',
            ],
            'gunung-butik' => [
                'nama' => 'GUNUNG BUTIK',
                'cerita' => 'Gunung butik walaupun hanya 1250 MDPL tapi tracknya gabisa diremehin, Gunung yang ada di Bogor Timur ini punya vibes yang beda.',
                // === TAMBAHAN BARU ===
                'mots' => 'alam mengandung bahaya, manusia mengundang bahaya',
                'foto1' => 'butik1-a.jpg',
                'foto2' => 'butik1-b.jpg',
            ],
            'puncak-lumut' => [
                'nama' => 'PUNCAK LUMUT',
                'cerita' => 'Persis seperti namanya, disepanjang track menuju puncak lumut ini kita bakal disuguhin pemandangan lumut yang hijau banget, apalagi kalo abis hujan, suasananya jadi lebih mistis dan eksotis.',
                // === TAMBAHAN BARU ===
                'mots' => 'jangan meninggalkan seluruh hutan hanya karena satu daun',
                'foto1' => 'lumut1-a.jpg',
                'foto2' => 'lumut2-a.jpg',
            ],
        ];

        // 2. Ambil data berdasarkan URL (slug) yang diklik
        if (!array_key_exists($slug, $ceritaGunung)) {
            abort(404);
        }

        $data = $ceritaGunung[$slug];

        // 3. Lempar datanya ke file detail.blade.php
        return view('detail', compact('data'));
    }
}