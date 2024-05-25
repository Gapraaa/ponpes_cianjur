<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Campaign;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        return view('donasi.index', compact('donations'));
    }

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

    public function accept(Donation $donation)
    {
        if ($donation->status === 'pending') {
            $donation->update(['status' => 'accepted']);
            $donation->campaign->increment('amount', $donation->nominal_donasi);
        }

        return redirect()->back()->with('success', 'Donation accepted.');
    }

    public function reject(Donation $donation)
    {
        if ($donation->status === 'pending') {
            $donation->update(['status' => 'rejected']);
        }

        return redirect()->back()->with('success', 'Donation rejected.');
    }

    public function destroy(Donation $donation)
    {
        $donation->delete();
    
        return redirect()->route('donation.index')->with('success', 'Donation deleted successfully');
    }
}
