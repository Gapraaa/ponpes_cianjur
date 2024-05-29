<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Campaign;
use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CampaignController extends Controller
{

    public function show()
    {
        $campaigns = Campaign::all(); // Retrieve all campaigns
        return view('campaign.show', compact('campaigns'));
    }

    public function detail($id)
    {
        // Find the campaign by its ID
        $campaign = Campaign::findOrFail($id);
        $donations = Donation::all();

        // If the campaign is not found, return a 404 error
        if (!$campaign) {
            abort(404, 'Campaign not found');
        }

        // Pass the campaign data to the view
        return view('campaign.detail', compact('campaign', 'donations'));
    }
    
}
