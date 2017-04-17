<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests;

class AdminController extends Controller
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
        $page_title = "Admin";
        $page_subtitle = "Personalized system messages.";
        $page_active = "admin";
        $crumbs = [
            "Admin"=>"/admin"
        ];
        return view('admin.index', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }


    /**
     * Index view
     *
     * @param  \Illuminate\Http\Request  request
     * @return view
     */
    public function logs (Request $request)
    {
        $page_title = "Admin";
        $page_subtitle = "Logs.";
        $page_active = "admin";
        $crumbs = [
            "Admin"=>"/admin",
            "Logs"=>"/admin/logs"
        ];
        return view('admin.logs', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }


    /**
     * Index view
     *
     * @param  \Illuminate\Http\Request  request
     * @return view
     */
    public function reports (Request $request)
    {
        $page_title = "Admin";
        $page_subtitle = "Reports.";
        $page_active = "admin";
        $crumbs = [
            "Admin"=>"/admin",
            "Reports"=>"/admin/reports"
        ];
        return view('admin.reports', compact('crumbs','title','page_title','page_subtitle','page_active'));
    }
}
