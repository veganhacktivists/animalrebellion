<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Carbon\Carbon;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::whereDate('end_date', '>=', Carbon::now())
            ->orderBy('start_date')
            ->get();

        return view('home', compact('events'));
    }
}
