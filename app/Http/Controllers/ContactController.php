<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\PressContact;
use App\Models\TeamContact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pressContacts = PressContact::get();
        $teamContacts = TeamContact::get();
        $faqs = Faq::get();

        return view('contact.index', compact('pressContacts', 'teamContacts', 'faqs'));
    }
}
