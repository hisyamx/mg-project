<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Division;
use App\User;

class DivisionController extends Controller
{
    public function index()
    {
        $division = Division::orderBy('name') -> get();
        $user = User::orderBy('name')->get();
        return view("user.division.index", ['user' => $user,'division' => $division]);
    }
}
