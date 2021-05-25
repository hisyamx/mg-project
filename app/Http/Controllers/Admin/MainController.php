<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Division;
use App\Project;
use App\User;

class MainController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $division = Division::all();

        $karyawan_count = User::karyawan()->count();
        $latest_karyawan = User::karyawan()->take(5);

        $magang_count = User::magang()->count();
        $latest_magang = User::magang()->take(5);

        $project_count = Project::count();
        $latest_project = Project::all()->take(5);

        return view('pages.index', compact(['division','karyawan_count','latest_karyawan','magang_count','latest_magang','project_count','latest_project']));
    }
}
