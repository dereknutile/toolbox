<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SecretsController extends Controller
{
    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * index
     */
    public function index()
    {
        $title = "Secrets Page";
        $page_active = "secrets";

        return view('secrets.index', compact('title','page_active'));
    }
}
