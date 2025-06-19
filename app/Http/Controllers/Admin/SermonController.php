<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sermon;

class SermonController extends Controller
{
    public function index()
    {
        $sermons = Sermon::latest()->paginate(10);
        return view('admin.sermons.index', compact('sermons'));
    }

    public function create()
    {
        return view('admin.sermons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'speaker' => 'required|string|max:255',
            'date' => 'required|date',
            'audio' => 'nullable|file|mimes:mp3,wav',
        ]);

        $sermon = new Sermon($request->only(['title', 'speaker', 'date']));

        if ($request->hasFile('audio')) {
            $sermon->audio_path = $request->file('audio')->store('sermons', 'public');
        }

        $sermon->save();

        return redirect()->route('admin.sermons.index')->with('success', 'Sermon added.');
    }

    public function edit(Sermon $sermon)
    {
        return view('admin.sermons.edit', compact('sermon'));
    }

    public function update(Request $request, Sermon $sermon)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'speaker' => 'required|string|max:255',
            'date' => 'required|date',
            'audio' => 'nullable|file|mimes:mp3,wav',
        ]);

        $sermon->fill($request->only(['title', 'speaker', 'date']));

        if ($request->hasFile('audio')) {
            $sermon->audio_path = $request->file('audio')->store('sermons', 'public');
        }

        $sermon->save();

        return redirect()->route('admin.sermons.index')->with('success', 'Sermon updated.');
    }

    public function destroy(Sermon $sermon)
    {
        $sermon->delete();
        return redirect()->route('admin.sermons.index')->with('success', 'Sermon deleted.');
    }
}
