<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Berita;
use App\Http\Controllers\Controller;

class BeritaController extends Controller
{

    public function show()
    {
        $beritas = Berita::paginate(9);
        return view('berita.show', compact('beritas'));
    }

}
