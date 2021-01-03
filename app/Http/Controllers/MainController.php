<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // $index = IndexController::all();
        return view('users.pages.index');
    }
    public function profile()
    {
        // $index = IndexController::all();
        return view('users.pages.profile');
    }
    public function division()
    {
        // $index = IndexController::all();
        return view('users.pages.division');
    }
    public function project()
    {
        // $index = IndexController::all();
        return view('users.pages.detailproject');
    }
}
