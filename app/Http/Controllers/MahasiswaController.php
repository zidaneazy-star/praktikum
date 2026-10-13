<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    private function getMahasiswa()
    {
        return [
            ['nama' => 'Budi Santoso',   'nim' => '1234567890', 'ipk' => 3.75],
            ['nama' => 'Ani Wijaya',     'nim' => '1234567891', 'ipk' => 3.20],
            ['nama' => 'Citra Lestari',  'nim' => '1234567892', 'ipk' => 2.85],
            ['nama' => 'Zidan Mujtaba',   'nim' => '242520093', 'ipk' => 3.90],
            ['nama' => 'Eka Putri',      'nim' => '1234567894', 'ipk' => 1.80],
        ];
    }

    public function profil()
    {
        $nama  = 'Budi Santoso';
        $nim   = '1234567890';
        $prodi = 'Teknik Informatika';

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }

    public function daftar()
    {
        $mahasiswa = $this->getMahasiswa();
        return view('mahasiswa.daftar', compact('mahasiswa'));
    }

    public function detail($nim)
    {
        $data = collect($this->getMahasiswa())->firstWhere('nim', $nim);
        abort_if(!$data, 404);
        return view('mahasiswa.detail', compact('data'));
    }
}
