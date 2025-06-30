<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Sermon;
use App\Models\Category;
use App\Models\Event;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.pages.index');
    }

    public function about()
    {
        return view('frontend.pages.about.index');
    }

    public function donations()
    {
        return view('frontend.pages.donations.index');
    }

    public function events(Request $request)
    {
        $events = Event::latest()->paginate(10);
        return view('frontend.pages.events.index')->with([
            'events' => $events,
        ]);
    }

    public function showEvent(Event $event)
    {
        return view('frontend.pages.events.show')->with([
            'event' => $event,
        ]);
    }

    public function showContact()
    {
        return view('frontend.pages.contacts.index');
    }

    public function submitContact(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string|max:1000',
        ]);

        Contact::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'message' => $request->input('message'),
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }

    public function ministries()
    {
        return view('frontend.pages.ministries.index');
    }

    public function showMinistry()
    {
        return view('frontend.pages.ministries.show');
    }

    public function sermons(Request $request)
    {
        $categories = Category::orderBy('name')->get();

        // Build the sermons query
        $query = Sermon::with('categories')->latest('date');

        // If a category slug was provided, filter sermons
        if ($request->filled('category')) {
            $category = Category::where('slug', $request->input('category'))->first();
            if ($category) {
                $query->whereHas(
                    'categories',
                    fn($q) =>
                    $q->where('categories.id', $category->id)
                );
            }
        }

        // Paginate the results
        $sermons = $query->paginate(10)->appends($request->only('category'));

        return view('frontend.pages.sermons.index')->with([
            'sermons' => $sermons,
            'categories' => $categories,
        ]);
    }

    public function showSermon()
    {
        return view('frontend.pages.sermons.show');
    }

}
