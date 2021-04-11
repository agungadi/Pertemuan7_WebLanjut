<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table="mahasiswas";

    public $timestamps= false;
    protected $primaryKey = 'Nim';

    protected $fillable = [
        'Nim',
        'Email',
        'Nama',
        'TglLahir',
        'Kelas',
        'Jurusan',
        'No_Handphone',
        ];


}
