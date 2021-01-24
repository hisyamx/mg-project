<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Division;
use App\Karyawan;
use App\Magang;
use App\Project;

class MainController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

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
    public function index()
    {
        $karyawan = Karyawan::all();
        $latest_karyawan = Karyawan::orderBy('created_at','DESC')->limit(5)->get();
        $magang = Magang::all();
        $latest_magang = Magang::orderBy('created_at','DESC')->limit(5)->get();
        $project = Project::all();
        $latest_project = Project::orderBy('created_at','DESC')->limit(5)->get();

        $division = Division::all();

        return view('users.pages.index',['karyawan' => $karyawan,'division' => $division,'magang' => $magang,'project' => $project,'latest_karyawan' => $latest_karyawan,'latest_magang' => $latest_magang,'latest_project' => $latest_project]);
    }
}
