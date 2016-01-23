<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    // homepage
    public function home()
    {
        $title = "Home Page";
        $page_active = "home";

        return view('pages.home', compact('title','page_active'));
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function modal($id)
    {
        $title = "Table Page";
        $page_active = "table";
        $entry = Directory::find($id);

        return view('pages.modal', compact('entry'));
    }

    // page that displays the table output
    public function about()
    {
        $title = "About Page";
        $page_active = "about";
        $content = Cms::where('tag','about')->where('status',1)->first();

        return view('pages.about', compact('title','page_active', 'content'));
    }

    // page that displays the table output
    public function contact()
    {
        $title = "Contact Page";
        $page_active = "contact";
        return view('pages.contact', compact('title','page_active'));
    }
}
