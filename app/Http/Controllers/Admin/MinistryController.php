<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ministry;

use Illuminate\Http\Request;

class MinistryController extends Controller
{
    public function index()
    {
        $ministries = Ministry::orderBy('name', 'asc')
            ->paginate(10);
        return view('admin.ministries.index')->with([
            'ministries' => $ministries,
        ]);
    }

    public function create()
    {
        $leaders = Ministry::pluck('leader', 'id');
        return view('admin.ministries.create')->with([
            'leaders' => $leaders,
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'leader'      => 'nullable|string|max:255',
            'image'       => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')
                ->store('ministries', 'public');
        }

        Ministry::create($data);

        return redirect()->route('admin.ministries.index')
            ->with('success', 'Ministry created.');
    }

    public function edit(Ministry $ministry)
    {
        return view('admin.ministries.edit', compact('ministry'));
    }

    public function update(Request $request, Ministry $ministry)
    {
        $data = $request->validate([
            'name'        => 'required|string|max:255',
            'description' => 'nullable|string',
            'leader'      => 'nullable|string|max:255',
            'image'       => 'nullable|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if ($request->hasFile('image')) {
            // Optionally delete old image here...
            $data['image'] = $request->file('image')
                ->store('ministries', 'public');
        }

        $ministry->update($data);

        return redirect()->route('admin.ministries.index')
            ->with('success', 'Ministry updated.');
    }

    public function destroy(Ministry $ministry)
    {
        $ministry->delete();
        return redirect()->route('admin.ministries.index')
            ->with('success', 'Ministry deleted.');
    }
}
