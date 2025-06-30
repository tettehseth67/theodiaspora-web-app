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

    public function store(Request $request, Sermon $sermon)
    {
        // Validate and store the sermon data
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date',
            'speaker' => 'nullable|string|max:255',
            'category_ids' => 'nullable|array',
            'category_ids.*' => 'exists:categories,id',
        ]);

        Sermon::create($data);
        if ($request->filled('category_ids')) {
            $sermon->categories()->sync($request->input('category_ids'));
        } else {
            $sermon->categories()->sync([]);
        }

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
        if ($request->filled('category_ids')) {
            $sermon->categories()->sync($request->input('category_ids'));
        } else {
            $sermon->categories()->sync([]);
        }

        return redirect()->route('admin.sermons.index')->with('success', 'Sermon updated successfully.');
    }

    public function destroy($id)
    {
        $sermon = Sermon::findOrFail($id);
        $sermon->delete();

        return redirect()->route('admin.sermons.index')->with('success', 'Sermon deleted successfully.');
    }
}
