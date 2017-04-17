<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AccountController extends Controller
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
        $page_title = "My Account";
        $page_subtitle = "Personal account information";
        $page_active = "account";
        $page_sub_active = "account";
        $crumbs = [
            "My Account"=>"/account"
        ];
        return view('account.index', compact('crumbs','title','page_title','page_subtitle','page_active','page_sub_active'));
    }
}
