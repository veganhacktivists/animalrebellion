<?php

namespace App\Http\Controllers;

use App\Models\Event;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $events = Event::all();

        return view('home', compact('events'));
    }
}
