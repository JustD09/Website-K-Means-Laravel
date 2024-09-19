<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruas;

class AtasanRuasController extends Controller
{
    public function index()
    {
        $atasanRuas = Ruas::orderBy('created_at', 'DESC')->get();
  
        return view('atasanRuas.index', compact('atasanRuas'));
    }
}
