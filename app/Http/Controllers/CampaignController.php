<?php

namespace App\Http\Controllers;

use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'target_amount' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('campaign_images', 'public');
        }

        Campaign::create($data);

        return redirect()->route('campaign.index')->with('success', 'Campaign created successfully.');
    }

    public function update(Request $request, Campaign $campaign)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'target_amount' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($campaign->image) {
                Storage::disk('public')->delete($campaign->image);
            }
            $data['image'] = $request->file('image')->store('campaign_images', 'public');
        }

        $campaign->update($data);

        return redirect()->route('campaign.index')->with('success', 'Campaign updated successfully.');
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
