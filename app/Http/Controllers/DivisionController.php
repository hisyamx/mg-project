<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Division;

class DivisionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $division = Division::orderBy('name_division')->paginate(10);
        return view("division.index",['division' => $division]);
    }
 
    public function store(Request $request)
    {

        $this->validate($request, [
        
            'name_division' => 'required|max:30',           
            'headof_division' => 'required|max:30',           
            'status_division' => 'required|max:30'           
        ]);

        $division = new Division();

        $division->name_division = request('name_division');
        $division->headof_division = request('headof_division');
        $division->status_division = request('status_division');
        
        $division->save();

        return redirect("/division")->with("success","Division Created Successfully");
    }

    public function show($id)
    {
        $division = Division::findOrFail($id);
        return view("division.add",['division' => $division]);
    }

    public function destroy($id)
    {
        $division = Division::findOrFail($id);
        $division->delete();
        
        return redirect("/division")->with("success","Division Deleted Successfully");
    }

    public function edit($id)
    {
        $division = Division::findOrFail($id);
        return view("division.edit",['division' => $division]);
    }

    public function update_record($id)
    {
        $division = Division::findOrFail($id);

        $division->name_division = request('name_division');
        $division->headof_division = request('headof_division');
        $division->status_division = request('status_division');

        $division->save(); //this will UPDATE the record with id=1

        return redirect("/division")->with("success","Division Updated Successfully");
    }
}
