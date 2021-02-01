<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Karyawan;
use App\Division;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $division = Division::orderBy('name') -> get();
        $karyawan = Karyawan::orderBy('name')->paginate(20);

        return view("karyawan.index",['karyawan' => $karyawan,'division' => $division]);
    }

    public function create()
    {
        $division = Division::all();
        
        if(count($division) <  1){
            return redirect("/division")->with("error","You must create a division before creating an karyawan");
        }
        return view("karyawan.create",['division' => $division]);
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $division = Division::all();
        return view("karyawan.edit",['karyawan' => $karyawan],['division' => $division]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'kode' => 'required|min:4|max:50',
            'address' =>  'required|max:100',  
            'role' =>  'required|min:4',  
            'division' =>  'required',  
            'telephone' =>  'required|min:10|max:15',  
            'status' =>  'required',
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

        $karyawan = new Karyawan();

        $karyawan->name = request('name');
        $karyawan->kode = request('kode');
        $karyawan->address = request('address');
        $karyawan->role = request('role');
        $karyawan->division = request('division');
        $karyawan->telephone = request('telephone');
        $karyawan->status = request('status');
        $karyawan->cover_image = $fileNameToStore;
        
        $karyawan->save();

        return redirect("/karyawan")->with('success',"karyawan Created Successfully");
    }
    

    public function show($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view("karyawan.show",['karyawan' => $karyawan]);
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $karyawan->delete();

        if($karyawan->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$karyawan->cover_image);
        }
        
        return redirect("/karyawan")->with("success","karyawan Deleted Successfully");
    }

    public function update_record(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'kode' => 'required|min:4|max:50',
            'address' =>  'required|max:100',  
            'role' =>  'required|min:4',  
            'division' =>  'required',  
            'telephone' =>  'required|min:10|max:15',  
            'status' =>  'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $karyawan = Karyawan::findOrFail($id);
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
            Storage::delete('public/cover_images/'.$karyawan->cover_image);
        }

        $karyawan->name = request('name');
        $karyawan->kode = request('kode');
        $karyawan->address = request('address');
        $karyawan->role = request('role');
        $karyawan->division = request('division');
        $karyawan->telephone = request('telephone');
        $karyawan->status = request('status');
        if($request->hasFile('cover_image')){
            $karyawan->cover_image = $fileNameToStore;
        }

        $karyawan->save(); //this will UPDATE the record

        return redirect("/karyawan")->with("success","Karyawan was updated successfully");
    }

    // public function pay($id)
    // {
    //     $division = Division::orderBy('name') -> get();
    //     $karyawan = Karyawan::findOrFail($id);
    //     return view("karyawan.pay",['karyawan' => $karyawan,'division' => $division]);
    // }    
}
