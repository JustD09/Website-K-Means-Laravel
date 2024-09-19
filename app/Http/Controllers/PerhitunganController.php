<?php

namespace App\Http\Controllers;

use App\Models\Perhitungan;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index()
    {
        $perhitungans = Perhitungan::all()->map(function ($item) {
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

        return view('perhitungan.index', compact('perhitungans'));
    }

    public function create()
    {
        return view('perhitungan.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'ruas' => 'required|string',
            'sta_dari' => 'required|integer',
            'sta_ke' => 'required|integer',
            'kondisi' => 'required|integer',
            'jenis' => 'required|integer',
            'ukuran_lubang' => 'required|integer',
            'cluster' => 'required|string',
        ]);

        // Tentukan kategori berdasarkan cluster
        switch ($data['cluster']) {
            case 'C1':
                $data['kategori'] = 'Tidak Prioritas';
                break;
            case 'C2':
                $data['kategori'] = 'Kurang Prioritas';
                break;
            case 'C3':
                $data['kategori'] = 'Prioritas';
                break;
            default:
                $data['kategori'] = 'Tidak Diketahui'; // Jika cluster tidak valid
                break;
        }
        
        Perhitungan::create($data);

        return redirect()->route('perhitungan.index')->with('success', 'Data berhasil ditambahkan');
    }


    public function edit(Perhitungan $perhitungan)
    {
        return view('perhitungan.edit', compact('perhitungan'));
    }

    public function update(Request $request, Perhitungan $perhitungan)
    {
        $request->validate([
            'ruas' => 'required|string',
            'sta_dari' => 'required|integer',
            'sta_ke' => 'required|integer',
            'kondisi' => 'required|integer',
            'jenis' => 'required|integer',
            'ukuran_lubang' => 'required|integer',
            'cluster' => 'required|string',
        ]);

        $data = $request->all();

        // Tentukan kategori berdasarkan cluster
        switch ($data['cluster']) {
            case 'C1':
                $data['kategori'] = 'Tidak Prioritas';
                break;
            case 'C2':
                $data['kategori'] = 'Kurang Prioritas';
                break;
            case 'C3':
                $data['kategori'] = 'Prioritas';
                break;
            default:
                $data['kategori'] = 'Tidak Diketahui'; // Jika cluster tidak valid
                break;
        }

        $perhitungan->update($data);

        return redirect()->route('perhitungan.index')->with('success', 'Data berhasil diperbarui');
    }


    public function show(string $id)
    {
        $perhitungan = Perhitungan::findOrFail($id);
  
        return view('perhitungan.show', compact('perhitungan'));
    }

    public function destroy(Perhitungan $perhitungan)
    {
        $perhitungan->delete();

        return redirect()->route('perhitungan.index')->with('success', 'Data berhasil dihapus');
    }

    public function hitungDistance(Request $request)
    {
        // Ambil data dari request atau database
        $kondisi = $request->input('kondisi'); // Contoh: 3
        $jenis = $request->input('jenis'); // Contoh: 4
        $ukuran_lubang = $request->input('ukuran_lubang'); // Contoh: 1

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
        $distanceC1 = sqrt(pow(($kondisi - $ar9), 2) + pow(($jenis - $as9), 2) + pow(($ukuran_lubang - $at9), 2));
        $distanceC2 = sqrt(pow(($kondisi - $ar10), 2) + pow(($jenis - $as10), 2) + pow(($ukuran_lubang - $at10), 2));
        $distanceC3 = sqrt(pow(($kondisi - $ar11), 2) + pow(($jenis - $as11), 2) + pow(($ukuran_lubang - $at11), 2));

        // Kirim hasil ke view
        return view('perhitungan.index', compact('distanceC1', 'distanceC2', 'distanceC3'));
    }
}
