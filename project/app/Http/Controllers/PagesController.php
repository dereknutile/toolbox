<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function about(Request $request)
    {
        $title = "About Page";
        $page_active = "about";
        // session(['flash_success' => 'Test']);
        $request->session()->flash('flash_info', 'Testing a flash message.');
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
