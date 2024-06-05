<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paud;

class PaudController extends Controller
{
    public function show()
    {
        $pauds = Paud::all();
        return view('paud.show', compact('pauds'));
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
            $imagePath = $request->file('image')->store('paud_images', 'public');
        }

        // Create a new Paud record
        Paud::create([
            'option' => $request->input('option'),
            'image' => $imagePath, // Save the path to the database
        ]);

        // Redirect back with a success message
        return redirect()->route('paud.show')->with('success', 'Paud created successfully!');
    }

    public function destroy($id)
    {
        $pauds = Paud::findOrFail($id);
        $pauds->delete();

        return redirect()->route('paud.show')->with('success', 'Slider deleted successfully.');
    }
}
