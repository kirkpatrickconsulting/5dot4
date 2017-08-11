<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use GeoIP;

/**
 * Class BlankpageController
 * @package App\Http\Controllers\Back
 */
class BlankpageController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }
    
    /**
     * Show the Blankpage page.
     *
     * @return Response
     */
    public function showBlankpage()
    {
        /*
         * $location = GeoIP::getLocation('64.233.191.128');
         * $location = GeoIP::getLocation('107.185.132.137');
         */
        $location = GeoIP::getLocation($this->request->ip());
        
        return view('back.pages.blankpage', array('data' => $location));
    }
}