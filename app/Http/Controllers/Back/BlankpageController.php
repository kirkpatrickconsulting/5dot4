<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Notifications\SendMailTest;
use Illuminate\Http\Request;
use GeoIP;
use Illuminate\Support\Facades\Auth;


/**
 * Class BlankpageController
 *
 * @package App\Http\Controllers\Back
 */
class BlankpageController extends Controller
{

    /**
     * BlankpageController constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $this->middleware('auth');
        $this->request = $request;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showBlankpage()
    {

        $location = GeoIP::getLocation('64.233.191.128');


            $user = Auth::user();
            $message = 'This is a Test';
            $user->notify(new SendMailTest($message));

      //  $location = GeoIP::getLocation($this->request->ip());
        return view('back.pages.blankpage', array('data' => $location));
        }
}