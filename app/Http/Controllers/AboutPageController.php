<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;

class AboutPageController extends Controller
{
    public function show(AboutPage $aboutPage)
    {
        return view('about.show', compact('aboutPage'));
    }
}
