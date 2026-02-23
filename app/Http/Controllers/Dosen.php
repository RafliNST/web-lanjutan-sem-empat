<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dosen extends Controller
{
    public function get()
    {
        $dosen = [
            [
                'no' => '1',
                'nip' => '775426789',
                'nama' => 'Nina',
                'no_hp' => '08123456789',
            ],
            [
                'no' => '2',
                'nip' => '775426783',
                'nama' => 'Dewa',
                'no_hp' => '08123456780',
            ],
            [
                'no' => '3',
                'nip' => '775426787',
                'nama' => 'Sagara',
                'no_hp' => '08123456781',
            ],
            [
                'no' => '4',
                'nip' => '775426742',
                'nama' => 'Edi',
                'no_hp' => '08123456782',
            ],
            [
                'no' => '5',
                'nip' => '775426388',
                'nama' => 'Patrio',
                'no_hp' => '08123456783',
            ],
        ];

        return view('DataDosen', [
            'title' => 'Data Dosen',
            'dosen' => $dosen
        ]);
    }
}
