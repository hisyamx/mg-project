<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('users.pages.index');
    }
    public function profile()
    {
        return view('users.pages.profile');
    }
    public function division()
    {
        return view('manage_division.division');
    }
    public function karyawan()
    {
        return view('manage_karyawan.karyawan');
    }
    public function magang()
    {
        return view('manage_magang.magang');
    }
    public function project()
    {
        return view('manage_project.project');
    }
}
