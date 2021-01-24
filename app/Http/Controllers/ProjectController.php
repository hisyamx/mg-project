<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Acces;
use Illuminate\Http\Request;

use App\Project;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $project = Project::orderBy('name')->paginate(10);

        return view("project.project",['project' => $project]);
    }
 
    public function store(Request $request)
    {

        $this->validate($request,[ 'name' => 'required|max:30'           
            ]);

        $project = new Project();

        $project->name = request('name');
        
        $project->save();

        return redirect("/project")->with("success","Project Created Successfully");
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view("project.show",['project' => $project]);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();
        
        return redirect("/project")->with("success","Project Deleted Successfully");
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view("project.edit",['project' => $project]);
    }

    public function update_record($id)
    {
        $project = Project::findOrFail($id);

        $project->name = request('name');

        $project->save(); //this will UPDATE the record with id=1

        return redirect("/project")->with("success","Project Updated Successfully");
    }
}
