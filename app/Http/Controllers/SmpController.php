<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Smp;

class SmpController extends Controller
{
    public function show()
    {
        $smps = Smp::all();
        return view('smp.show', compact('smps'));
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
            $imagePath = $request->file('image')->store('smp_images', 'public');
        }

        // Create a new Paud record
        Smp::create([
            'option' => $request->input('option'),
            'image' => $imagePath, // Save the path to the database
        ]);

        // Redirect back with a success message
        return redirect()->route('smp.show')->with('success', 'Paud created successfully!');
    }

    public function destroy($id)
    {
        $smps = Smp::findOrFail($id);
        $smps->delete();

        return redirect()->route('smp.show')->with('success', 'Slider deleted successfully.');
    }
}
