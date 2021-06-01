<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Division;
use App\User;
use App\Project;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{

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

    public function user()
    {
        $division = Division::orderBy('name') -> get();
        $user = User::orderBy('name') -> get();
        return view("user.user", ['user' => $user,'division' => $division]);
    }

    public function show($id)
    {
        $division = Division::orderBy('name') -> get();
        $user = User::orderBy('name') -> get();
        return view("user.showuser", ['user' => $user,'division' => $division]);
    }

    public function division()
    {
        $division = Division::orderBy('name') -> get();
        $user = User::orderBy('name') -> get();
        return view("user.division", ['user' => $user,'division' => $division]);
    }

    public function showDivision($id)
    {
        $division = Division::orderBy('name') -> get();
        $user = User::orderBy('name') -> get();
        return view("user.showdivision", ['user' => $user,'division' => $division]);
    }

    public function project()
    {
        $division = Division::orderBy('name') -> get();
        $user = User::orderBy('name') -> get();
        return view("user.project", ['user' => $user,'division' => $division]);
    }

    public function showProject($id)
    {
        $division = Division::orderBy('name') -> get();
        $user = User::orderBy('name') -> get();
        return view("user.showproject", ['user' => $user,'division' => $division]);
    }

    public function timeline()
    {
        $division = Division::orderBy('name')->get();
        $project = Project::orderBy('name')->with('pj_user')->paginate(20);

        return view("project.timeline", ['project' => $project,'division' => $division]);
    }
}
