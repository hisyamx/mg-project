<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class ProjectController extends Controller
{
    public function index(){
        $user = User::with('projects')->find(Auth::id());
        $projects = $user->projects->sortByDesc('finish');
        return view('user.project.index', compact('projects'));
    }
    
    public function timelineIndex(){
        $user = User::find(Auth::id());
        $projects = $user->projects()->with('users')->orderBy('finish', 'DESC')->get();
        return view('user.project.timeline', compact('projects'));
    }
}
