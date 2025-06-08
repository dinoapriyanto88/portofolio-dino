<?php

namespace App\Http\Controllers;

class PortofolioController extends Controller
{
    public function index()
    {
        $profil = [
            'nama' => 'Nama Lengkap Kamu',
            'deskripsi' => 'Saya adalah mahasiswa Ilmu Komputer yang tertarik pada web development dan desain antarmuka pengguna.',
            'sosmed' => [
                'Instagram' => 'https://instagram.com/username',
                'LinkedIn' => 'https://linkedin.com/in/username',
            ],
            'pendidikan' => [
                'SMA N 1 Kota Lampung (2017–2020)',
                'Universitas Lampung – Ilmu Komputer (2021–sekarang)',
            ],
        ];

        $tugas = [
            ['judul' => 'Tugas 1', 'link' => 'https://youtu.be/link_tugas1', 'tipe' => 'video'],
            ['judul' => 'Tugas 2', 'link' => asset('files/tugas2.pdf'), 'tipe' => 'pdf'],
            ['judul' => 'Tugas 3', 'link' => asset('files/tugas3.pdf'), 'tipe' => 'pdf'],
            ['judul' => 'Tugas 4', 'link' => asset('files/tugas4.pdf'), 'tipe' => 'pdf'],
        ];

        $kuis = [
            ['judul' => 'Kuis 1', 'link' => 'https://youtu.be/link_kuis1'],
            ['judul' => 'Kuis 2', 'link' => 'https://youtu.be/link_kuis2'],
            ['judul' => 'Kuis 3', 'link' => 'https://youtu.be/link_kuis3'],
            ['judul' => 'Kuis 4', 'link' => 'https://youtu.be/link_kuis4'],
        ];

        return view('portofolio', compact('profil', 'tugas', 'kuis'));
    }
}
