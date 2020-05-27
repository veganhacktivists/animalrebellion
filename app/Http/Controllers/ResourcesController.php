<?php

namespace App\Http\Controllers;

use App\Models\Item;

class ResourcesController extends Controller
{
    public function index()
    {
        $items = Item::paginate(10);

        return view('resources.index', compact('items'));
    }
}
