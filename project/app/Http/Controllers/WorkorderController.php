<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WorkorderController extends Controller
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
        $page_title = "My Workorders";
        $page_subtitle = "Trouble ticket database.";
        $page_active = "wo";
        $crumbs = [
            "Workorders"=>"/wo",
            "My Workorders"=>"/wo"
        ];
        return view('pages.wo', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }
}
