<?php

namespace App\Http\Controllers;

use App\Url;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Class UrlController
 * @package App\Http\Controllers
 */
class UrlController extends Controller
{
    /**
     * @var Request
     */
    protected $request;

    /**
     * UrlController constructor.
     * @param Request $request
     */
    public function __construct(Request $request) {
        $this->middleware('auth');
        $this->request = $request;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urls = Url::all();
        return view('back.pages.urls.index', compact('urls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.pages.urls.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $this->validate($this->request, [
            'title' => 'required|max:255|min:3',
            'url' => 'required|max:255|min:4|url',
            'description' => 'nullable|max:255|min:4',
            'panel' => 'nullable|max:2|min:1',
        ]);

        Url::create([
            'title' => $this->request->title,
            'url' => $this->request->url,
            'description' => $this->request->description,
            'panel' => $this->request->panel,
        ]);

        Session::flash('message', 'New URL has been created.');
        return Redirect::route('urls.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $url = Url::find($id);
        if (is_null($url))
        {
            return Redirect::route('urls.index');
        }
        return view('back.pages.urls.show', compact('url'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $url = Url::find($id);
        if (is_null($url))
        {
            return Redirect::route('urls.index');
        }
        return view('back.pages.urls.edit', compact('url'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $this->validate($this->request, [
            'title' => 'required|max:255|min:3',
            'url' => 'required|max:255|min:4|url',
            'description' => 'nullable|max:255|min:4',
            'panel' => 'nullable|max:2|min:1',
        ]);

        $url = Url::find($id);
        $url->update([
            'title' => $this->request->title,
            'url' => $this->request->url,
            'description' => $this->request->description,
            'panel' => $this->request->panel,
        ]);

        Session::flash('message', 'Existing url has been edited.');
        return Redirect::route('urls.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Url::find($id)->delete();
        Session::flash('alert-class', 'alert-danger');
        Session::flash('message', 'Existing url has been deleted.');
        return Redirect::route('urls.index');
    }
}
