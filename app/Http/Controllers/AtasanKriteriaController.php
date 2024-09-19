<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kriteria;

class AtasanKriteriaController extends Controller
{
    public function index()
    {
        $atasanKriteria = Kriteria::orderBy('created_at', 'DESC')->get();
  
        return view('atasanKriteria.index', compact('atasanKriteria'));
    }
}
