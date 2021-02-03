<?php

namespace App\Http\Controllers;

use Auth;
use Session;
use App\Acces;
use Illuminate\Http\Request;

use App\Project;
use App\Division;
use App\Karyawan;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $division = Division::orderBy('name') -> get();
        $karyawan = Karyawan::orderBy('name') -> get();
        $project = Project::orderBy('name')->paginate(20);

        return view("project.index",['project' => $project,'division' => $division]);
    }

    public function create()
    {
        $karyawan = Karyawan::all();
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
        $karyawan = Karyawan::all();
        return view("project.edit",['project' => $project],['division' => $division],['karyawan' => $karyawan]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [            
        'name' => 'required|max:50',
        'users' => 'required|max:50',
        'division' =>  'required',
        'start' =>  'required',  
        'finish' =>  'nullable',  
        'status' =>  'required',
        'description' => 'required|max:999',
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
        $project->users = request('users');
        $project->division = request('division');
        $project->start = request('start');
        $project->finish = request('finish');
        $project->status = request('status');
        $project->description = request('description');
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
        
        return redirect("/project")->with("success","project Deleted Successfully");
    }

    public function update_record(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'users' => 'required|max:50',
            'division' =>  'required',
            'start' =>  'required',  
            'finish' =>  'nullable',  
            'status' =>  'required',
            'description' => 'required|max:999',
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
        $project->users = request('users');
        $project->division = request('division');
        $project->start = request('start');
        $project->finish = request('finish');
        $project->status = request('status');
        $project->description = request('description');
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
}
