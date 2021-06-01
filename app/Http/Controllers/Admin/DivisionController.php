<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Division;
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
        return view("admin.division.create");
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:30',
            'headof' => 'required|max:30',
            'status' => 'required|max:30'
        ]);

        $division = new Division();

        $division->name = request('name');
        $division->headof = request('headof');
        $division->status = request('status');

        $division->save();

        return redirect("division.index")->with("success", "Division Created Successfully");
    }

    public function show($id)
    {
        $division = Division::findOrFail($id);
        return view("admin.division.delete", ['division' => $division]);
    }

    public function destroy($id)
    {
        $division = Division::findOrFail($id);
        $division->delete();

        return redirect("division.index")->with("success", "Division Deleted Successfully");
    }

    public function edit($id)
    {
        $division = Division::findOrFail($id);
        return view("admin.division.edit", ['division' => $division]);
    }

    public function update_record($id)
    {
        $division = Division::findOrFail($id);

        $division->name = request('name');
        $division->headof = request('headof');
        $division->status = request('status');

        $division->save(); //this will UPDATE the record with id=1

        return redirect("division.index")->with("success", "Division Updated Successfully");
    }
}
