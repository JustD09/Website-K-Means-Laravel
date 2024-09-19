<?php

namespace App\Http\Controllers;

use App\Models\Clustering;
use Illuminate\Http\Request;

class ClusteringController extends Controller
{
    public function index()
    {
        $clusterings = Clustering::all();
        return view('clustering.index', compact('clusterings'));
    }

    public function create()
    {
        return view('clustering.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'distance_c1' => 'required|numeric',
            'distance_c2' => 'required|numeric',
            'distance_c3' => 'required|numeric',
        ]);

        // Menentukan cluster dan jarak minimum
        $data['cluster'] = $this->determineCluster($data);
        $data['min_distance'] = min($data['distance_c1'], $data['distance_c3']); // Set min_distance

        // Membuat record clustering baru
        Clustering::create($data);
        return redirect()->route('clustering.index');
    }


    public function edit($id)
    {
        $clustering = Clustering::findOrFail($id);
        return view('clustering.edit', compact('clustering'));
    }

    public function update(Request $request, $id)
    {
        $clustering = Clustering::findOrFail($id);
        $data = $request->validate([
            'distance_c1' => 'required|float',
            'distance_c2' => 'required|float',
            'distance_c3' => 'required|float',
        ]);

        $data['cluster'] = $this->determineCluster($data);
        $data['min_distance'] = min($data['distance_c1'], $data['distance_c3']); // Set min_distance

        $clustering->update($data);
        return redirect()->route('clustering.index');
    }

    public function show($id)
    {
        $clustering = Clustering::findOrFail($id);
        return view('clustering.show', compact('clustering'));
    }

    private function determineCluster($data)
    {
        $distances = [$data['distance_c1'], $data['distance_c2'], $data['distance_c3']];
        $minDistance = min($distances);

        if ($data['distance_c1'] == $minDistance) {
            return 'C1';
        } elseif ($data['distance_c2'] == $minDistance) {
            return 'C2';
        } else {
            return 'C3';
        }
    }

    public function destroy(Clustering $clustering)
    {
        $clustering->delete();

        return redirect()->route('clustering.index')->with('success', 'Data berhasil dihapus');
    }
}
