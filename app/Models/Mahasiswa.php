<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswas'; // nama tabel di database
    protected $fillable = [
        'nim',
        'nama',
        'prodi',
        'kelas'
    ];
}
