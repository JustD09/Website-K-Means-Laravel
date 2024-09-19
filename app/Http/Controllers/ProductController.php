<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Product;
 
class ProductController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $product = Product::orderBy('created_at', 'DESC')->get();
  
        return view('products.index', compact('product'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'no_ruas' => 'required|string|max:255',
            'nama_ruas' => 'required|string|max:255',
            'cluster' => 'required|string|max:255', // Pastikan format ini sesuai dengan input HTML
            'status' => 'required|string|max:255',
            'categories' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
        ]);

        $product = new Product();
        $product->no_ruas = $validated['no_ruas'];
        $product->nama_ruas = $validated['nama_ruas'];
        $product->cluster = $validated['cluster'];
        $product->status = $validated['status'];
        $product->categories = $validated['categories'];

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $product->image = $imageName;
        }

        $product->save();
 
        return redirect()->route('products')->with('success', 'Data berhasil ditambahkan!');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'Data berhasil diupdate!');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'Data berhasil dihapus!');
    }
}