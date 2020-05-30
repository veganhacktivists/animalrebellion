<?php

namespace App\Http\Controllers;

use App\Models\JoinResponse;
use Illuminate\Http\Request;

class JoinResponseController extends Controller
{
    public function store()
    {
        $jsonResponse = request()->except(['_token', 'page_id']);
//        dd($jsonResponse);

        JoinResponse::create([
            'page_id' => request()->page_id,
            'response' => $jsonResponse,
        ]);

        return back('201');
    }
}
