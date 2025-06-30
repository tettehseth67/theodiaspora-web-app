<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\Sermon;
use App\Models\User;
use App\Models\Event;

use Illuminate\Routing\Controller as BaseController;

class AdminController extends BaseController
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $totalDonations = Donation::count();
        $totalMembers   = User::where('name', 'member')->count();  // adjust as needed
        $totalSermons   = Sermon::count();
        $totalEvents  = Event::count();

        return view('admin.dashboard')->with([
            'totalDonations' => $totalDonations,
            'totalMembers'   => $totalMembers,
            'totalSermons'   => $totalSermons,
            'totalEvents'    => $totalEvents,
        ]);
    }

    // Add more admin-specific methods here as needed

}
