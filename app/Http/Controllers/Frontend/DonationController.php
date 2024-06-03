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

    public function store(Request $request, Campaign $campaign)
    {
        $validated = $request->validate([
            'nominal_donasi' => 'required|numeric|min:0.01',
            'bukti_donasi' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'nama_lengkap' => 'required|string|max:255',
            'phone_email' => 'required|string|max:255',
            'message' => 'nullable|string',
        ]);

        if ($request->hasFile('bukti_donasi')) {
            $validated['bukti_donasi'] = $request->file('bukti_donasi')->store('donation_proofs', 'public');
        }

        $validated['campaign_id'] = $campaign->id;
        $validated['status'] = 'pending';

        Donation::create($validated);

        return redirect()->route('campaign.show', $campaign)->with('success', 'Donation created successfully.');
    }

}

