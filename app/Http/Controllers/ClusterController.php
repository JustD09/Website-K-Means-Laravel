<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Cluster;
 
class ClusterController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $cluster = Cluster::orderBy('created_at', 'DESC')->get();
  
        return view('clusters.index', compact('cluster'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('clusters.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Cluster::create($request->all());
 
        return redirect()->route('clusters')->with('success', 'Data berhasil ditambahkan!');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cluster = Cluster::findOrFail($id);
  
        return view('clusters.show', compact('cluster'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $cluster = Cluster::findOrFail($id);
  
        return view('clusters.edit', compact('cluster'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $cluster = Cluster::findOrFail($id);
  
        $cluster->update($request->all());
  
        return redirect()->route('clusters')->with('success', 'Data berhasil diupdate!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cluster = Cluster::findOrFail($id);
  
        $cluster->delete();
  
        return redirect()->route('clusters')->with('success', 'Data berhasil dihapus!');
    }
}