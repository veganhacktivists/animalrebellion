<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ResourcesController extends Controller
{
    public function index()
    {
        $items = Item::get();

        return view('resources.index', compact('items'));
    }
}
