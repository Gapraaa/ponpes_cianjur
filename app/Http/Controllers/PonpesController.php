<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Ponpes;

class PonpesController extends Controller
{
    public function show()
    {
        $ponpes = Ponpes::l();
        return view('ponpes.show', compact('ponpes'));
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
            $imagePath = $request->file('image')->store('ponpes_images', 'public');
        }

        // Create a new ponpes record
        Ponpes::create([
            'option' => $request->input('option'),
            'image' => $imagePath, // Save the path to the database
        ]);

        // Redirect back with a success message
        return redirect()->route('ponpes.show')->with('success', 'ponpe created successfully!');
    }

    public function destroy($id)
    {
        $ponpes = Ponpes::findOrFail($id);
        $ponpes->delete();

        return redirect()->route('ponpes.show')->with('success', 'Slider deleted successfully.');
    }
}
