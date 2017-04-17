<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MessageController extends Controller
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
        $page_title = "Messages";
        $page_subtitle = "Personalized system messages.";
        $page_active = "messages";
        $crumbs = [
            "Messages"=>"/messages"
        ];
        return view('message.index', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }
}
