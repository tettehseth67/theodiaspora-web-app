<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sermon;
use Illuminate\Http\Request;

class SermonController extends Controller
{
    public function index()
    {
        $sermons = Sermon::latest()->get();
        return view('admin.sermons.index')->with('sermons', $sermons);
    }

    public function show($id)
    {
        return view('admin.sermons.show', ['id' => $id]);
    }

    public function create()
    {
        return view('admin.sermons.create');
    }

    public function store(Request $request)
    {
        // Validate and store the sermon data
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'speaker' => 'nullable|string|max:255',
        ]);

        Sermon::create($data);

        return redirect()->route('admin.sermons.index')->with('success', 'Sermon created successfully.');
    }

    public function edit($id)
    {
        return view('admin.sermons.edit', ['id' => $id]);
    }

    public function update(Request $request, $id)
    {
        // Validate and update the sermon data
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'speaker' => 'nullable|string|max:255',
        ]);

        $sermon = Sermon::findOrFail($id);
        $sermon->update($data);

        return redirect()->route('admin.sermons.index')->with('success', 'Sermon updated successfully.');
    }

    public function destroy($id)
    {
        $sermon = Sermon::findOrFail($id);
        $sermon->delete();

        return redirect()->route('admin.sermons.index')->with('success', 'Sermon deleted successfully.');
    }
}
