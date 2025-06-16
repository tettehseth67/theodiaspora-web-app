<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function index()
    {
        return view('frontend.pages.index');
    }

    public function about()
    {
        return view('frontend.pages.about.index');
    }


    public function contact()
    {
        return view('frontend.pages.contacts.index');
    }
}
