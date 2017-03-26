<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $title = "Dashboard Placeholder Page";
        $page_active = "dashboard";
        return view('dashboard.index', compact('title','page_active'));
    }
}
