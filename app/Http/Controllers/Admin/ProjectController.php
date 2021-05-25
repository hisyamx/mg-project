<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Project;
use App\Division;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $project = Project::orderBy('name')->paginate(20);

        return view("project.index", compact('project'));
    }


    public function timeline()
    {
        $division = Division::orderBy('name')->get();
        $project = Project::orderBy('name')->with('pj_user')->paginate(20);

        return view("project.timeline", ['project' => $project,'division' => $division]);
    }

    public function create()
    {
        $division = Division::all();
        // $karyawan = Karyawan::all();
        if (count($division) <  1) {
            return redirect("division.index")->with("error", "You must create a division before creating an project");
        }
        return view("project.create", ['division' => $division]);
    }

    public function edit($id)
    {
        $project = Project::with('users')->findOrFail($id);
        $division = Division::all();
        // $karyawan = Karyawan::all();
        return view("project.edit", ['project' => $project], ['division' => $division]);
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
        if ($request->hasFile('cover_image')) {
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

        return redirect("project.index")->with('success', "Project Created Successfully");
    }


    public function show($id)
    {
        $P = P::findOrFail($id);
        return view("project.show", ['project' => $project]);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        if ($project->cover_image != 'noimage.jpg') {
            // Delete Image
            Storage::delete('public/cover_images/'.$project->cover_image);
        }

        return redirect("project.index")->with("success", "Project Deleted Successfully");
    }

    public function update_record(Request $request, $id)
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
        if ($request->hasFile('cover_image')) {
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
        if ($request->hasFile('cover_image')) {
            $project->cover_image = $fileNameToStore;
        }

        $project->save(); //this will UPDATE the record

        return redirect("project.index")->with("success", "Account was updated successfully");
    }

    public function single($id)
    {
        $project = Project::where('division', $id)->orderBy('name') -> paginate(20);
        $division = Division::orderBy('name') -> get();

        return view('project.single', ['project' => $project,'division' => $division]);
    }

    public function dropUser($project_id, $user_id)
    {
        $project = Project::findOrFail($project_id);
        $user = User::findOrFail($user_id);
        $user->projects()->detach();
        return redirect(route('admin.project.edit', ['id' => $project_id]));
    }

    public function addUser()
    {
        return dd('Edit user');
    }
}