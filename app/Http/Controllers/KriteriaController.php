<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
   public function index()
    {
        $kriteria = Kriteria::orderBy('created_at', 'DESC')->get();
  
        return view('kriteria.index', compact('kriteria'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kriteria.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kriteria::create($request->all());
 
        return redirect()->route('kriteria')->with('success', 'Data berhasil ditambahkan!');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
  
        return view('kriteria.show', compact('kriteria'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
  
        return view('kriteria.edit', compact('kriteria'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
  
        $kriteria->update($request->all());
  
        return redirect()->route('kriteria')->with('success', 'Data berhasil diupdate!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kriteria = Kriteria::findOrFail($id);
  
        $kriteria->delete();
  
        return redirect()->route('kriteria')->with('success', 'Data berhasil dihapus!');
    }
}
