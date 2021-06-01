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
        $users = User::orderBy('name')->karyawan()->get();
        return view("user.user.index", ['users' => $users]);
    }
}
