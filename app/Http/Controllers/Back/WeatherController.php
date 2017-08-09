<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;

class WeatherController extends Controller
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
     * Show the Tables page.
     *
     * @return Response
     */
    public function showWeather()
    {
        return view('back.pages.weather');
    }
}