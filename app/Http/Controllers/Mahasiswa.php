<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Mahasiswa extends Controller
{
    public function get()
    {
        $mahasiswa = [
            [
                'no' => '1',
                'nim' => '123456789',
                'nama' => 'Budi',
                'prodi' => 'Teknik Informatika',
                'kelas' => 'TI-1',
            ],
            [
                'no' => '2',
                'nim' => '123456783',
                'nama' => 'Anto',
                'prodi' => 'Teknik Kimia',
                'kelas' => 'TK-3',
            ],
            [
                'no' => '3',
                'nim' => '123456787',
                'nama' => 'Cici',
                'prodi' => 'Teknik Sipil',
                'kelas' => 'TS-2',
            ],
            [
                'no' => '4',
                'nim' => '123456742',
                'nama' => 'Dedi',
                'prodi' => 'Teknik Mesin',
                'kelas' => 'TM-1',
            ],
            [
                'no' => '5',
                'nim' => '123456388',
                'nama' => 'Eka',
                'prodi' => 'Teknik Informatika',
                'kelas' => 'TI-1',
            ],
        ];

        return view('DataMahasiswa', [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }
}
