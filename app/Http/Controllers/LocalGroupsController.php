<?php

namespace App\Http\Controllers;

use App\Models\LocalGroup;
use Illuminate\Http\Request;

class LocalGroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = LocalGroup::get();

        return view('local-groups.index', compact('groups'));
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\app\Models\LocalGroup  $localGroup
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(LocalGroup $localGroup)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\app\Models\LocalGroup  $localGroup
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(LocalGroup $localGroup)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\app\Models\LocalGroup  $localGroup
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, LocalGroup $localGroup)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\app\Models\LocalGroup  $localGroup
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(LocalGroup $localGroup)
    // {
    //     //
    // }
}
