<?php

namespace App\Http\Controllers;

use App\Models\JoinPage;

class JoinPageController extends Controller
{
    public function show(JoinPage $joinPage)
    {
        abort_unless($joinPage->published, 404);

        return view('join.show', compact('joinPage'));
    }
}
