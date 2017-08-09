<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

class FrontController extends Controller
{
    /**
     * Show the Front Page.
     *
     * @return Response
     */
    public function showFront()
    {
        return view('front.pages.front');
    }
}