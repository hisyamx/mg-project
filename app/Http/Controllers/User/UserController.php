<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Division;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('name')->get();
        return view("user.user.index", ['user' => $user,'division' => $division]);
    }
}
