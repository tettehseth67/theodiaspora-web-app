<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donation;

class DonationController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'amount' => 'required|numeric',
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'nullable|string|max:500',
            'payment_method' => 'nullable|string|max:50',
            'transaction_id' => 'nullable|string|max:100',
            'address' => 'nullable|string|max:255',
            // 'address2' => 'nullable|string|max:255',
            // 'city' => 'nullable|string|max:100',
            // 'state' => 'nullable|string|max:100',
            // 'postcode' => 'nullable|string|max:20',
        ]);

        $data['donation_date'] = now();

        Donation::create($data);

        if ($request->ajax()) {
            return response()->json(['message' => 'Thank you for your donation!']);
        }

        return back()->with('success', 'Thank you for your donation!');
    }
}
