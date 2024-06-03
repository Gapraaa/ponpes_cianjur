<?php

namespace App\Http\Controllers\Backend;

use App\Models\Donation;
use App\Models\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::all();
        return view('donasi.index', compact('donations'));
    }

    public function detailcampaign() 
    {
        // Find the campaign by its ID
        $campaigns = Campaign::all();

        // If the campaign is not found, return a 404 error
        if (!$campaigns) {
            abort(404, 'Campaign not found');
        }

        // Pass the campaign data to the view
        return view('donasi.detailcampaign', compact('campaigns'));
    }

    public function detaildonasi($id)
    {
        {
            // Mendapatkan campaign dengan ID tertentu beserta donasi-donasi yang berstatus 'accepted'
            $campaign = Campaign::with(['donations' => function($query) {
                $query->where('status', 'accepted');
            }])->find($id);
    
            if (!$campaign) {
                return view('campaigns.not_found');
            }
    
            return view('donasi.detaildonasi', ['campaign' => $campaign]);
        }

        // {
        //     // Mendapatkan campaign dengan ID tertentu beserta donasi-donasinya
        //     $campaign = Campaign::with('donations')->find($id);
    
        //     if (!$campaign) {
        //         return view('campaigns.not_found');
        //     }
    
        //     return view('donasi.detaildonasi', ['campaign' => $campaign]);
        // }
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

    // Add 'status' field with the value 'accepted'
    $validated['status'] = 'accepted';
    $validated['campaign_id'] = $campaign->id;

    // Create the donation
    $donation = Donation::create($validated);

    // Increment the campaign's amount by the nominal donation
    $campaign->increment('amount', $validated['nominal_donasi']);

    return redirect()->back()->with('success', 'Donation created successfully.');

    }



    public function accept(Donation $donation)
    {
        // Mengizinkan perubahan status dari 'pending' atau 'rejected' ke 'accepted'
        if ($donation->status === 'pending' || $donation->status === 'rejected') {
            $donation->update(['status' => 'accepted']);
            $donation->campaign->increment('amount', $donation->nominal_donasi);
        }

        return redirect()->back()->with('success', 'Donation accepted.');
    }

    public function reject(Donation $donation)
    {
        // Mengizinkan perubahan status dari 'pending' atau 'accepted' ke 'rejected'
        if ($donation->status === 'pending' || $donation->status === 'accepted') {
            if ($donation->status === 'accepted') {
                // Kurangi jumlah kampanye jika donasi diterima kemudian ditolak
                $donation->campaign->decrement('amount', $donation->nominal_donasi);
            }
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
