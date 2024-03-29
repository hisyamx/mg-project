<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Division;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    public function index()
    {
        $division = Division::orderBy('name') -> get();
        $karyawan = User::karyawan()->orderBy('name')->get();

        return view("admin.karyawan.index", ['karyawan' => $karyawan,'division' => $division]);
    }

    public function create()
    {
        $division = Division::all();
        $users = User::where('role', '!=', 1)->get();
        if (count($division) <  1) {
            return redirect("division.index")->with("error", "You must create a division before creating an karyawan");
        }
        return view("admin.karyawan.create", compact(['division','users']));
    }

    public function edit($id)
    {
        $karyawan = User::findOrFail($id);
        $division = Division::all();
        return view("admin.karyawan.edit", ['karyawan' => $karyawan], ['division' => $division]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'code' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'division' => 'required',
            'start' => 'required',
            'finish' => 'nullable',
            'cover_image' => 'nullable',
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


        $user = new User();

        $user->code = $request->code;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->telephone = $request->telephone;
        $user->address = $request->address;
        $user->division_id = $request->division;
        $user->start = Carbon::make($request->start);
        $user->finish = Carbon::make($request->finish);
        $user->cover_image = $fileNameToStore;

        if ($user->save()) {
            return redirect(route('admin.karyawan.index'))->with('success', "karyawan Created Successfully");
        }
    }


    public function show($id)
    {
        $karyawan = User::findOrFail($id);
        return view("admin.karyawan.show", ['karyawan' => $karyawan]);
    }

    public function destroy($id)
    {
        $karyawan = User::findOrFail($id);
        $karyawan->delete();

        if ($karyawan->cover_image != 'noimage.jpg') {
            // Delete Image
            Storage::delete('public/cover_images/'.$karyawan->cover_image);
        }

        return redirect(route('admin.karyawan.index'))->with("success", "karyawan Deleted Successfully");
    }

    public function update_record(Request $request, $id)
    {
        $this->validate($request, [
            'code' => 'required',
            'name' => 'required',
            'role' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'division' => 'required',
            'start' => 'required',
            'finish' => 'nullable',
            'cover_image' => 'nullable',
        ]);

        $user = User::findOrFail($id);
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
            Storage::delete('public/cover_images/'.$user->cover_image);
        }

        $user->code = $request->code;
        $user->name = $request->name;
        $user->role = $request->role;
        $user->telephone = $request->telephone;
        $user->address = $request->address;
        $user->division_id = $request->division;
        $user->start = Carbon::make($request->start);
        $user->finish = Carbon::make($request->finish);

        if ($request->hasFile('cover_image')) {
            $user->cover_image = $fileNameToStore;
        }

        $user->save(); //this will UPDATE the record

        return redirect(route('admin.karyawan.index'))->with("success", "Karyawan was updated successfully");
    }

    // public function pay($id)
    // {
    //     $division = Division::orderBy('name') -> get();
    //     $karyawan = Karyawan::findOrFail($id);
    //     return view("admin.karyawan.pay",['karyawan' => $karyawan,'division' => $division]);
    // }
}
