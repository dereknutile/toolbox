<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DocumentationController extends Controller
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
        $page_title = "Documentation";
        $page_subtitle = "Official information and source or records.";
        $page_active = "docs";
        $crumbs = [
            "Documentation"=>"/docs"
        ];
        return view('documentation.index', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }
}
