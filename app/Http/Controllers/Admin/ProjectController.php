<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Project;
use App\Division;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\Builder;

class ProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $project = Project::orderBy('name')->with(['pj_user', 'division', 'users'])->paginate(20);
        return view("admin.project.index", compact('project'));
    }


    public function timeline()
    {
        $division = Division::orderBy('name')->get();
        $project = Project::orderBy('name')->with('pj_user')->paginate(20);

        return view("admin.project.timeline", ['project' => $project,'division' => $division]);
    }

    public function create()
    {
        $division = Division::all();
        $users = User::where('role', '!=', 1)->get();
        // $karyawan = Karyawan::all();
        if (count($division) <  1) {
            return redirect("admin.division.index")->with("error", "You must create a division before creating an project");
        }
        return view("admin.project.create", compact(['division','users']));
    }

    public function edit($id)
    {
        $project = Project::with(['users', 'division'])->findOrFail($id);
        $users = User::where('role', '!=', 1)->get();
        $division = Division::all();
        return view("admin.project.edit", compact(['division','users','project']));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'division_id' =>  'required',
            'pj_user' => 'required',
            'start' =>  'required',
            'finish' =>  'nullable',
            'description' => 'required',
            'cover_image' => 'nullable'
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

        $project->name = $request->name;
        $project->division_id = $request->division_id;
        $project->pj_user_id = $request->pj_user;
        $project->start = $request->start;

        $project->finish = $request->finish;
        $project->description = $request->description;
        $project->cover_image = $fileNameToStore;

        $project->save();

        return redirect(route('admin.project.index'))->with('success', "Project Created Successfully");
    }


    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view("admin.project.show", ['project' => $project]);
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        if ($project->cover_image != 'noimage.jpg') {
            // Delete Image
            Storage::delete('public/cover_images/'.$project->cover_image);
        }

        return redirect(route('admin.project.index'))->with("success", "Project Deleted Successfully");
    }

    public function update_record(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'division_id' =>  'required',
            'pj_user_id' => 'required',
            'start' =>  'required',
            'finish' =>  'nullable',
            'description' => 'required',
            'cover_image' => 'nullable'
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

        $project->name = $request->name;
        $project->division_id = $request->division_id;
        $project->pj_user_id = $request->pj_user_id;
        $project->start = $request->start;

        $project->finish = $request->finish;
        $project->description = $request->description;
        if ($request->hasFile('cover_image')) {
            $project->cover_image = $fileNameToStore;
        }

        $project->save(); //this will UPDATE the record

        return redirect(route('admin.project.index'))->with("success", "Account was updated successfully");
    }

    public function single($id)
    {
        $project = Project::where('division', $id)->orderBy('name') -> paginate(20);
        $division = Division::orderBy('name') -> get();

        return view('admin.project.single', ['project' => $project,'division' => $division]);
    }

    public function addUser($project_id)
    {
        $project = Project::findOrFail($project_id);
        $users = User::where('role', '!=', 1)->whereDoesntHave('projects', function ($query) use ($project_id) {
            $query->where('project_id', $project_id);
        })->get();

        return view('admin.project.adduser', compact(['project', 'users']));
    }

    public function storeUser($project_id, $user_id)
    {
        $project = Project::findOrFail($project_id);
        $user = User::findOrFail($user_id);

        $project->users()->attach($user);
        return redirect(route('admin.project.add.user', $project_id));
    }

    public function dropUser($project_id, $user_id)
    {
        $project = Project::findOrFail($project_id);
        $user = User::findOrFail($user_id);

        $project->users()->detach($user);
        return redirect(route('admin.project.edit', $project_id));
    }
}
