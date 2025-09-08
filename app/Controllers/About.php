<?php namespace App\Controllers;

class About extends BaseController
{
    public function index()
    {
        $data = [
            'menu'  => 'about',
            // Ganti sesuai datamu
            'me'    => [
                'nama' => 'Armitha Dyah Febriyanti',
                'profil' => 'D3 Teknologi Informasi PSDKU Lumajang',
                'nim'  => '2231740003',
                'tanggal' => date('d F Y'),
                'foto' => 'http://localhost/arsip-surat/public/img/foto.jpg'

            ]
        ];
        return view('layout/header', $data)
             .view('about/index', $data)
             .view('layout/footer');
    }
}
