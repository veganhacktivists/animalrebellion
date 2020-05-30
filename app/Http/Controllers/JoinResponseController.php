<?php

namespace App\Http\Controllers;

use App\Models\JoinResponse;

class JoinResponseController extends Controller
{
    public function store()
    {
        $jsonResponse = request()->except(['_token', 'page_id']);

        JoinResponse::create([
            'page_id' => request()->page_id,
            'response' => $jsonResponse,
        ]);

        return back('201');
    }
}
