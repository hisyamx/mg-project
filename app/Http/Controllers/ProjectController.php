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
        $division = Division::orderBy('name') -> get();
        $project = Project::orderBy('name')->paginate(20);

        return view("project.index",['project' => $project,'division' => $division]);
    }

    public function create()
    {
        $division = Division::all();
        
        if(count($division) <  1){
            return redirect("/division")->with("error","You must create a division before creating an project");
       }
        return view("project.create",['division' => $division]);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $division = Division::all();
        return view("project.edit",['project' => $project],['division' => $division]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'division' =>  'required',  
            'location' =>  'required|max:100',  
            'telephone' =>  'required|min:10|max:15',  
            'salary' =>  'required',
            'cover_image' => 'image|nullable|max:1999'
        
        ]);

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        $project = new Project();

        $project->name = request('name');
        $project->division = request('division');
        $project->location = request('location');
        $project->telephone = request('telephone');
        $project->salary = request('salary');
        $project->cover_image = $fileNameToStore;
        
        $project->save();

        return redirect("/project")->with('success',"project Created Successfully");
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

        if($project->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$project->cover_image);
        }
        
        return redirect("/project")->with("success","Project Deleted Successfully");
    }

    public function update_record(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'division' =>  'required',  
            'location' =>  'required|max:100',  
            'telephone' =>  'required|min:10|max:15',  
            'salary' =>  'required',
            'cover_image' => 'image|nullable|max:1999'
        
        ]);

        $project = Project::findOrFail($id);
        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('cover_image')->storeAs('public/cover_images', $fileNameToStore);
            // Delete file if exists
            Storage::delete('public/cover_images/'.$project->cover_image);
        }

        $project->name = request('name');
        $project->division = request('division');
        $project->location = request('location');
        $project->telephone = request('telephone');
        $project->salary = request('salary');
        if($request->hasFile('cover_image')){
            $project->cover_image = $fileNameToStore;
        }

        $project->save(); //this will UPDATE the record

        return redirect("/project")->with("success","Account was updated successfully");
    }

    public function single($id)
    {
        $project = Project::where('division',$id)->orderBy('name') -> paginate(20);
        $division = Division::orderBy('name') -> get();

        return view('project.single',['project' => $project,'division' => $division]);
    }

    public function pay($id)
    {
        $division = Division::orderBy('name') -> get();
        $project = Project::findOrFail($id);
        return view("project.pay",['project' => $project,'division' => $division]);
    }    
}
