<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about()
    {
        $title = "About Page";
        $page_active = "about";
        return view('pages.about', compact('title','page_active'));
    }

    public function contact()
    {
        $title = "Contact Page";
        $page_active = "contact";
        return view('pages.contact', compact('title','page_active'));
    }

    // Main landing page, i.e. the homepage
    public function splash()
    {
        $title = "Home Page";
        $page_active = "home";
        return view('pages.splash', compact('title','page_active'));
    }
}
