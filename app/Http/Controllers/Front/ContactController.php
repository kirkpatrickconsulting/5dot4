<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    /**
     * Show the Contact Page.
     *
     * @return Response
     */
    public function showContact()
    {
        return view('front.pages.contact');
    }
}