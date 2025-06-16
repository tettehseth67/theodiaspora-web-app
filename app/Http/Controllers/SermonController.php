<?php

namespace App\Http\Controllers;

use App\Models\Sermon;
use Illuminate\Http\Request;

class SermonController extends Controller
{
    public function index()
    {
        $sermons = Sermon::latest()->get();
        return view('frontend.pages.sermons.index')->with('sermons', $sermons);
    }

    public function show($id)
    {
        return view('frontend.pages.sermons.show', ['id' => $id]);
    }

    public function create()
    {
        return view('frontend.pages.sermons.create');
    }

    public function edit($id)
    {
        return view('frontend.pages.sermons.edit', ['id' => $id]);
    }
}
