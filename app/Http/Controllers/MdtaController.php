<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mdta;

class MdtaController extends Controller
{
    public function show()
    {
        $mdtas = Mdta::all();
        return view('mdta.show', compact('mdtas'));
    }

    public function store(Request $request)
    {
        // Validate the request data
        $request->validate([
            'option' => 'required|in:HeaderSlider,KegiatanSlider',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Ensure it's an image
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('mdta_images', 'public');
        }

        // Create a new Paud record
        Mdta::create([
            'option' => $request->input('option'),
            'image' => $imagePath, // Save the path to the database
        ]);

        // Redirect back with a success message
        return redirect()->route('mdta.show')->with('success', 'Paud created successfully!');
    }

    public function destroy($id)
    {
        $mdtas = Mdta::findOrFail($id);
        $mdtas->delete();

        return redirect()->route('mdta.show')->with('success', 'Slider deleted successfully.');
    }
}
