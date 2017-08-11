<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

/**
 * Class DashboardController
 * @package App\Http\Controllers\Back
 */
class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the Dashboard page.
     *
     * @return Response
     */
    public function showDashboard()
    {
        return view('back.pages.dashboard');
    }
}