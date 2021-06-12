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
        $users = User::all();
        return view("user.user.index", ['users' => $users]);
    }

    public function show($id)
    {
        $users = User::findOrFail($id);
        return view("user.user.show", ['users' => $users]);
    }
}
