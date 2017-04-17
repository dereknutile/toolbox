<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AssetController extends Controller
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
        $page_title = "Assets";
        $page_subtitle = "Assets inventory database.";
        $page_active = "assets";
        $crumbs = [
            "Assets"=>"/assets"
        ];
        return view('software.index', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }
}
