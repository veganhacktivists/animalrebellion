<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;

class AboutPageController extends Controller
{
    public function show(AboutPage $aboutPage)
    {
        abort_unless($aboutPage->published, 404);

        $otherPages = AboutPage::where('id', '!=', $aboutPage->id)->get();

        return view('about.show', compact('aboutPage', 'otherPages'));
    }
}
