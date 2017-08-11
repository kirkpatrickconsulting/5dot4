<?php

namespace App\Http\Controllers;

use App\Events\UserCreated;
use Event;
use App\User;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


/**
 * Class UserController
 *
 * @package App\Http\Controllers
 */
class UserController extends Controller
{

    /**
     * @var Request
     */
    protected $request;


    /**
     * UserController constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->request = $request;
    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $users = User::all();
        return view('back.pages.users.index', compact('users'));

    }


    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('back.pages.users.create');
    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store()
    {
        $this->validate($this->request, [
            'name' => 'required|max:255|min:4',
            'email' => 'required|max:255|unique:users|email',
            'address1' => 'max:255|min:3',
            'address2' => 'max:255|min:3',
            'city' => 'max:255|min:4',
            'state' => 'alpha|max:2|min:2',
            'zip' => 'digits:5',
            'phone' => 'digits:10',
            'password' => 'required|min:7|confirmed',
        ]);

        $user = User::create([
        'name' => $this->request->name,
        'email' => $this->request->email,
        'address1' => $this->request->address1,
        'address2' => $this->request->address2,
        'city' => $this->request->city,
        'state' => $this->request->state,
        'zip' => $this->request->zip,
        'phone' => $this->request->phone,
        'password' => bcrypt($this->request->password),
        ]);

        Event::fire(new UserCreated($user));

        Session::flash('message', 'New user has been created.'); 
        return Redirect::route('users.index');
    }


    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function show($id)
    {
        $user = User::find($id);
        if (is_null($user))
        {
            return Redirect::route('users.index');
        }
        return view('back.pages.users.show', compact('user'));
    }


    /**
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function edit($id)
    {
        $user = User::find($id);
        if (is_null($user))
        {
            return Redirect::route('users.index');
        }
        return view('back.pages.users.edit', compact('user'));
    }


    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update($id)
    {
        $this->validate($this->request, [
            'name' => 'required|max:255|min:4',
            'email' => 'required|email|unique:users,email,'.$id,
            'address1' => 'max:255|min:3',
            'address2' => 'max:255|min:3',
            'city' => 'max:255|min:4',
            'state' => 'alpha|max:2|min:2',
            'zip' => 'digits:5',
            'phone' => 'digits:10',
        ]);

        $user = User::find($id);
        $user->update([
        'name' => $this->request->name,
        'address1' => $this->request->address1,
        'address2' => $this->request->address2,
        'city' => $this->request->city,
        'state' => $this->request->state,
        'zip' => $this->request->zip,
        'phone' => $this->request->phone,
        ]);
        
        Session::flash('message', 'Existing user has been edited.');
        return Redirect::route('users.show', $id);
        // return Redirect::route('users.index');
    }


    /**
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        Session::flash('alert-class', 'alert-danger'); 
        Session::flash('message', 'Existing user has been deleted.');
        return Redirect::route('users.index');
    }
}
