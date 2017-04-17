<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AlertController extends Controller
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
        $page_title = "Alerts";
        $page_subtitle = "General and personalized alerts and callouts.";
        $page_active = "alerts";
        $page_sub_active = "alerts";
        $crumbs = [
            "Alerts"=>"/alerts"
        ];
        return view('alert.index', compact('crumbs','title','page_title','page_subtitle','page_active','page_sub_active'));
    }
}
