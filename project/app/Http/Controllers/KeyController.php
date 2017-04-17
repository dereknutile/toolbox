<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class KeyController extends Controller
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
        $page_title = "Keys";
        $page_subtitle = "Keys inventory database.";
        $page_active = "keys";
        $crumbs = [
            "Keys"=>"/keys"
        ];
        return view('key.index', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }
}
