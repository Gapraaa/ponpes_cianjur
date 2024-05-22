<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use Illuminate\Http\Request;

class CampaignController extends Controller
{

    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaign.index', compact('campaigns'));
    }

    public function create()
    {
        return view('campaign.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'target_amount' => 'required|numeric|min:0.01',
        ]);

        Campaign::create($validated);

        return redirect()->route('campaign.index')->with('success', 'Campaign created successfully.');
    }

    public function show()
    {
        $campaigns = Campaign::all(); // Retrieve all campaigns
        return view('campaign.show', compact('campaigns'));
    }

    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->delete();

        return redirect()->route('campaign.index')->with('success', 'Campaign deleted successfully.');
    }
}

