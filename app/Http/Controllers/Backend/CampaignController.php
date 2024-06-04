<?php

namespace App\Http\Controllers\Backend;

use App\Models\Campaign;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class CampaignController extends Controller
{

    public function index()
    {
        $campaigns = Campaign::all();
        return view('campaign.index', compact('campaigns'));
    }

    public function detail($id)
    {
        $campaigns = Campaign::findOrFail($id);
        return view('campaign.adminDetail', compact('campaigns'));
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

    public function edit($id)
    {
        $campaign = Campaign::findOrFail($id);

        return view('campaign.edit', compact('campaign'));
    }

    public function update(Request $request, $id)
    {
        
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'target_amount' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

    
        $campaign = Campaign::findOrFail($id);


        $campaign->title = $request->input('title');
        $campaign->description = $request->input('description');
        $campaign->target_amount = $request->input('target_amount');


        if ($request->hasFile('image')) {
            if ($campaign->image) {
                Storage::delete('public/' . $campaign->image);
            }

            $imagePath = $request->file('image')->store('campaign_images', 'public');
            $campaign->image = $imagePath;
        }

        
        $campaign->save();

        
        return redirect()->route('campaign.index')->with('success', 'Campaign updated successfully.');
    }

    public function destroy($id)
    {
        $campaign = Campaign::findOrFail($id);
        $campaign->delete();

        return redirect()->route('campaign.index')->with('success', 'Campaign deleted successfully.');
    }

}
