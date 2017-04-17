<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DirectoryController extends Controller
{
    /**
     * Controller construct
     *
     * @param
     * @return
     */
    public function __construct()
    {
        // construct
    }


    /**
     * Index view
     *
     * @param  \Illuminate\Http\Request  request
     * @return view
     */
    public function index (Request $request)
    {
        $page_title = "Directory";
        $page_subtitle = "Users and Groups.";
        $page_active = "directory";
        $crumbs = [
            "Directory"=>"/directory"
        ];
        return view('directory.index', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }
}
