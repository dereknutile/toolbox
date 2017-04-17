<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SoftwareController extends Controller
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
        $page_title = "Software";
        $page_subtitle = "Software inventory database.";
        $page_active = "wo";
        $crumbs = [
            "Software"=>"/wo"
        ];
        return view('software.index', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }
}
