<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class AtasanProductController extends Controller
{
    public function index()
    {
        $atasanProduct = Product::orderBy('created_at', 'DESC')->get();
  
        return view('atasanProduct.index', compact('atasanProduct'));
    }
    public function show(string $id)
    {
        $atasanProduct = Product::findOrFail($id);
  
        return view('atasanProduct.show', compact('atasanProduct'));
    }
}
