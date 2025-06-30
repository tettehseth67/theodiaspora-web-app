<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function index()
    {
        $donations = Donation::latest()->paginate(10);
        return response()->view('admin.donations.index', [
            'donations' => $donations,
        ]);
    }

    /**
     * Show the form for creating a new donation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('admin.donations.create');
    }

    public function show($id)
    {
        $donation = Donation::findOrFail($id);
        return response()->view('admin.donations.show', [
            'donation' => $donation,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric',
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'postcode' => 'nullable|string|max:20',
            'message' => 'nullable|string|max:500',
            'payment_method' => 'nullable|string|max:50',
            'transaction_id' => 'nullable|string|max:100',
            'donation_date' => 'nullable|date',
        ]);

        Donation::create([
            'amount' => $request->input('amount'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'address2' => $request->input('address2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'postcode' => $request->input('postcode'),
            'message' => $request->input('message'),
            'payment_method' => $request->input('payment_method'),
            'transaction_id' => $request->input('transaction_id'),
            'donation_date' => now(),
        ]);

        if ($request->ajax()) {
            return response()->json(['message' => 'Donation created successfully.']);
        }

        return redirect()->route('admin.donations.index')
            ->with('success', 'Donation created successfully.');
    }

    public function edit($id)
    {
        $donation = Donation::findOrFail($id);
        return response()->view('admin.donations.edit', [
            'donation' => $donation,
        ]);
    }


    public function update(Request $request, $id)
    {
        $donation = Donation::findOrFail($id);

        $request->validate([
            'amount' => 'required|numeric',
            'first_name' => 'required|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'address2' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'postcode' => 'nullable|string|max:20',
            'message' => 'nullable|string|max:500',
            'payment_method' => 'nullable|string|max:50',
            'transaction_id' => 'nullable|string|max:100',
            'donation_date' => 'nullable|date',
        ]);

        $donation->update([
            'amount' => $request->input('amount'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'address2' => $request->input('address2'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'postcode' => $request->input('postcode'),
            'message' => $request->input('message'),
            'payment_method' => $request->input('payment_method'),
            'transaction_id' => $request->input('transaction_id'),
            'donation_date' => $request->input('donation_date') ?: $donation->donation_date,
        ]);

        return redirect()->route('admin.donations.index')->with('success', 'Donation updated successfully.');
    }

    public function destroy($id)
    {
        $donation = Donation::findOrFail($id);
        $donation->delete();
        $donations = Donation::all();
        return response()->view('admin.donations.index', [
            'donations' => $donations,
            'success' => 'Donation deleted successfully.'
        ]);
    }
}
