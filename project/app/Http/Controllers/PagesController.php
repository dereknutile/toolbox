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
        return view('pages.about', compact('title','page_active'));
    }

    public function assets(Request $request)
    {
        $title = "Asset Page";
        $page_active = "assets";
        return view('pages.assets', compact('title','page_active'));
    }

    public function contact(Request $request)
    {
        $title = "Contact Page";
        $page_active = "contact";
        $request->session()->flash('flash_info', 'Testing a flash message on the '.$title);
        return view('pages.contact', compact('title','page_active'));
    }

    public function directory(Request $request)
    {
        $title = "Directory Page";
        $page_active = "directory";
        return view('pages.directory', compact('title','page_active'));
    }

    public function docs(Request $request)
    {
        $title = "Documentation Page";
        $page_active = "docs";
        return view('pages.docs', compact('title','page_active'));
    }

    public function keys(Request $request)
    {
        $title = "Security Keys Page";
        $page_active = "keys";
        return view('pages.keys', compact('title','page_active'));
    }

    public function software(Request $request)
    {
        $title = "Software Page";
        $page_active = "software";
        return view('pages.software', compact('title','page_active'));
    }

    // Main landing page, i.e. the homepage
    public function splash(Request $request)
    {
        $title = "Home Page";
        $page_active = "home";
        return view('pages.splash', compact('title','page_active'));
    }
}
