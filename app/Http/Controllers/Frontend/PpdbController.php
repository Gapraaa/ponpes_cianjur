<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{

    public function create()
    {
        return view('ppdb.create');
    }

}
