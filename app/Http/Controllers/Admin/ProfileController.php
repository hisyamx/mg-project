<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Division;
use App\User;

class ProfileController extends Controller
{
    // Open View Profile
    public function viewProfile()
    {
        $division = Division::all();
        $user = User::all();
        return view("pages.profile.index", ['user' => $user,'division' => $division]);
    }
}
