<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Division;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class MagangController extends Controller
{
    public function index()
    {
        $division = Division::orderBy('name')->get();
        $magang = User::magang()->orderBy('name')->paginate(20);

        return view("magang.index", ['magang' => $magang,'division' => $division]);
    }

    public function create()
    {
        $division = Division::all();

        if (count($division) <  1) {
            return redirect(route("division.index"))->with("error", "You must create a division before creating an magang");
        }
        return view("magang.create", ['division' => $division]);
    }

    public function edit($id)
    {
        $magang = User::findOrFail($id);
        $division = Division::all();
        return view("magang.edit", ['magang' => $magang], ['division' => $division]);
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
            'instansi' => 'required',
            'division_id' => 'required',
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
        $user->instansi = $request->instansi;
        $user->division_id = $request->division_id;
        $user->start = Carbon::make($request->start);
        $user->finish = Carbon::make($request->finish);
        $user->cover_image = $request->cover_image;

        $user->save();

        return redirect(route("magang.index"))->with('success', "Magang Created Successfully");
    }


    public function show($id)
    {
        $magang = User::findOrFail($id);
        return view("magang.show", ['magang' => $magang]);
    }

    public function destroy($id)
    {
        $magang = User::findOrFail($id);
        $magang->delete();

        if ($magang->cover_image != 'noimage.jpg') {
            // Delete Image
            Storage::delete('public/cover_images/'.$magang->cover_image);
        }

        return redirect(route("magang.index"))->with("success", "Magang Deleted Successfully");
    }

    public function update_record(Request $request, $id)
    {
        $this->validate($request, [
            'code' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
            'telephone' => 'required',
            'address' => 'required',
            'instansi' => 'required',
            'division_id' => 'required',
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
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role = $request->role;
        $user->telephone = $request->telephone;
        $user->address = $request->address;
        $user->instansi = $request->instansi;
        $user->division_id = $request->division_id;
        $user->start = Carbon::make($request->start);
        $user->finish = Carbon::make($request->finish);
        if ($request->hasFile('cover_image')) {
            $user->cover_image = $fileNameToStore;
        }

        $user->save(); //this will UPDATE the record

        return redirect(route("magang.index"))->with("success", "Account was updated successfully");
    }

    // public function pay($id)
    // {
    //     $division = Division::orderBy('name') -> get();
    //     $magang = Magang::findOrFail($id);
    //     return view("magang.pay",['magang' => $magang,'division' => $division]);
    // }
}
