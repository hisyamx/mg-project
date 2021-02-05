<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Project;
use App\Division;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $division = Division::orderBy('name') -> get();
        // $karyawan = Karyawan::orderBy('name') -> get();
        $project = Project::orderBy('name')->paginate(20);
        

        return view("project.index",['project' => $project,'division' => $division]);
    }

    
    public function timeline()
    {
        $division = Division::orderBy('name') -> get();
        // $karyawan = Karyawan::orderBy('name') -> get();
        $project = Project::orderBy('name')->paginate(20);

        return view("project.timeline",['project' => $project,'division' => $division]);

    }

    public function create()
    {
        $division = Division::all();
        // $karyawan = Karyawan::all();        
        if(count($division) <  1){
            return redirect("/division")->with("error","You must create a division before creating an project");
       }
        return view("project.create",['division' => $division]);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);
        $division = Division::all();
        // $karyawan = Karyawan::all();
        return view("project.edit",['project' => $project],['division' => $division],['karyawan' => $karyawan]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [ 
            'name' => 'required|max:50',
            'status' =>  'required',
            'division' =>  'required',
            'pj' => 'required',
            'start' =>  'required',  
            'finish' =>  'nullable',  
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
        $project->status = request('status');
        $project->division = request('division');
        $project->pj = request('pj');
        $project->start = request('start');
        
        $project->finish = request('finish');
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
            'status' =>  'required',
            'division' =>  'required',
            'pj' => 'required',
            'start' =>  'required',  
            'finish' =>  'nullable',  
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
        $project->status = request('status');
        $project->division = request('division');
        $project->pj = request('pj');
        $project->start = request('start');
        $project->finish = request('finish');
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
