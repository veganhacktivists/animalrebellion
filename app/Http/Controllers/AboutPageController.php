<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;

class AboutPageController extends Controller
{
    public function show(AboutPage $aboutPage)
    {
        $otherPages = AboutPage::where('id', '!=', $aboutPage->id)->get();

        return view('about.show', compact('aboutPage', 'otherPages'));
    }
}
