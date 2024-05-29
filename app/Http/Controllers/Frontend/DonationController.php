<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Donation;
use App\Models\Campaign;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    
    public function create(Campaign $campaign)
    {
        return view('donasi.create', compact('campaign'));
    }

}
