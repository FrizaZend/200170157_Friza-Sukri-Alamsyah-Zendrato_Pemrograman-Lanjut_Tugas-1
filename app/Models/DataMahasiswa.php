<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataMahasiswa extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = "mata_kuliah";
    protected $fillable = [
        'Kelas',
        'Kode',
        'Nama_Mata_Kuliah',
        'SKS'
    ];
}
