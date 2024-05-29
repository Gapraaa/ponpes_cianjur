<?php

namespace App\Http\Controllers\Backend;

use App\Models\Berita;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $beritas = Berita::all();
        return view('berita.index', compact('beritas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('berita_images', 'public');
        }

        Berita::create($data);

        return redirect()->route('berita.index')->with('success', 'Berita created successfully.');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        return view('berita.edit', compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $berita = Berita::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($berita->image) {
                Storage::disk('public')->delete($berita->image);
            }
            $data['image'] = $request->file('image')->store('berita_images', 'public');
        }

        $berita->update($data);

        return redirect()->route('berita.index')->with('success', 'Berita updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $berita = Berita::findOrFail($id);
        if ($berita->image) {
            Storage::disk('public')->delete($berita->image);
        }
        $berita->delete();

        return redirect()->route('berita.index')->with('success', 'Berita deleted successfully.');
    }
}
