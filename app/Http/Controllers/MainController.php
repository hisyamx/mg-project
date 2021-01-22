<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function beranda()
    {
        return view('users.pages.index');
    }
    public function profile()
    {
        return view('users.pages.profile');
    }
    public function division()
    {
        return view('division.division');
    }
    public function karyawan()
    {
        return view('karyawan.karyawan');
    }
    public function magang()
    {
        return view('magang.magang');
    }
    public function project()
    {
        return view('project.project');
    }
}
