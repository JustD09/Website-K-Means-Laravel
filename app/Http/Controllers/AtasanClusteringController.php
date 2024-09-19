<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Clustering;

class AtasanClusteringController extends Controller
{    
    public function index()
    {
        $atasanClustering = Clustering::all();
        return view('atasanClustering.index', compact('atasanClustering'));
    }
}
