<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $gallerys = Gallery::all();
        return view('gallery.index', compact('gallerys'));
    }

    public function create()
    {
        return view('gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('gallery_images', 'public');
        }

        Gallery::create($data);

        return redirect()->route('gallery.index')->with('success', 'Berita created successfully.');

    }

    public function show()
    {
        $gallerys = Gallery::paginate(9);
        return view('gallery.show', compact('gallerys'));
    }

    public function destroy( $id)
    {
        $gallery = Gallery::findOrFail($id);
        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Berita deleted successfully.');
    }

}
