<?php

namespace App\Http\Controllers;

use App\Models\JoinPage;

class JoinResponseController extends Controller
{
    public function store()
    {
        $joinPage = JoinPage::findOrFail('page_id');

        $jsonResponse = request()->except(['_token', 'page_id']);

        $joinPage->addResponse($jsonResponse);

        return back('201');
    }
}
