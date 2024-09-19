<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perhitungan;

class AtasanPehitunganController extends Controller
{
    public function index()
    {
        $atasanPerhitungans = Perhitungan::all()->map(function ($item) {
            // Ambil nilai referensi dari suatu sumber (misal, konstanta atau database)
            $ar9 = 1; // contoh nilai
            $as9 = 1; // contoh nilai
            $at9 = 1; // contoh nilai

            $ar10 = 3; // contoh nilai
            $as10 = 2; // contoh nilai
            $at10 = 3; // contoh nilai

            $ar11 = 3; // contoh nilai
            $as11 = 2; // contoh nilai
            $at11 = 4; // contoh nilai

            // Hitung Distance C1, C2, dan C3
            $item->distanceC1 = sqrt(pow(($item->kondisi - $ar9), 2) + pow(($item->jenis - $as9), 2) + pow(($item->ukuran_lubang - $at9), 2));
            $item->distanceC2 = sqrt(pow(($item->kondisi - $ar10), 2) + pow(($item->jenis - $as10), 2) + pow(($item->ukuran_lubang - $at10), 2));
            $item->distanceC3 = sqrt(pow(($item->kondisi - $ar11), 2) + pow(($item->jenis - $as11), 2) + pow(($item->ukuran_lubang - $at11), 2));

            return $item;
        });

        return view('atasanPerhitungan.index', compact('atasanPerhitungans'));
    }
}
