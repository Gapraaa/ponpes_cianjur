<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Gallery;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    

    public function show()
    {
        $gallerys = Gallery::paginate(9);
        return view('gallery.show', compact('gallerys'));
    }

    
}
