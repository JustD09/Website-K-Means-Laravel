<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perhitungan extends Model
{
    use HasFactory;

    protected $table = 'perhitungan';

    protected $fillable = [
        'ruas',
        'sta_dari',
        'sta_ke',
        'kondisi',
        'jenis',
        'ukuran_lubang',
        'cluster',
        'kategori',
    ];
}
