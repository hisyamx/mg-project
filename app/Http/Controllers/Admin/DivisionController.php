<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Division;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DivisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $division = Division::orderBy('name')->paginate(10);
        return view("admin.division.index", ['division' => $division]);
    }
    public function create()
    {
        $users = User::where('role', '!=', 1)->get();
        return view("admin.division.create", compact('users'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'head_user_id' => 'required|numeric|max:99999',
            'status' => 'required|max:30'
        ]);

        $division = new Division();

        $division->name = request('name');
        $division->head_user_id = request('head_user_id');
        $division->active = request('status') == "true";

        $division->save();

        return redirect(route("admin.division.index"))->with("success", "Division Created Successfully");
    }

    public function show($id)
    {
        $users = User::where('role', '!=', 1)->get();
        return view("admin.division.delete", compact('users'));
    }

    public function destroy($id)
    {
        $division = Division::findOrFail($id);
        $users = User::where('role', '!=', 1)->get();
        $division->delete();

        return redirect("admin.division.index")->with("success", "Division Deleted Successfully");
    }

    public function edit($id)
    {
        $division = Division::findOrFail($id);
        $users = User::where('role', '!=', 1)->get();
        return view("admin.division.edit", compact(['division','users']));
    }

    public function update_record($id)
    {
        $division = Division::findOrFail($id);

        $division->name = request('name');
        $division->head_user_id = request('head_user_id');
        $division->active = request('status') == "true";

        $division->save(); //this will UPDATE the record with id=1

        return redirect(route("admin.division.index"))->with("success", "Division Updated Successfully");
    }
}
