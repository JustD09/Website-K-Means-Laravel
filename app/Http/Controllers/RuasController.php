<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Ruas;
 
class RuasController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $ruas = Ruas::orderBy('created_at', 'DESC')->get();
  
        return view('ruas.index', compact('ruas'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ruas.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ruas::create($request->all());
 
        return redirect()->route('ruas')->with('success', 'Data berhasil ditambahkan!');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ruas = Ruas::findOrFail($id);
  
        return view('ruas.show', compact('ruas'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $ruas = Ruas::findOrFail($id);
  
        return view('ruas.edit', compact('ruas'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ruas = Ruas::findOrFail($id);
  
        $ruas->update($request->all());
  
        return redirect()->route('ruas')->with('success', 'Data berhasil diupdate!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ruas = Ruas::findOrFail($id);
  
        $ruas->delete();
  
        return redirect()->route('ruas')->with('success', 'Data berhasil dihapus!');
    }
}