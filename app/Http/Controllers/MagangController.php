<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Magang;
use App\Division;

class MagangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $division = Division::orderBy('name') -> get();
        $magang = Magang::orderBy('name')->paginate(20);

        return view("magang.index",['magang' => $magang,'division' => $division]);
    }

    public function create()
    {
        $division = Division::all();
        
        if(count($division) <  1){
            return redirect("/division")->with("error","You must create a division before creating an magang");
       }
        return view("magang.create",['division' => $division]);
    }

    public function edit($id)
    {
        $magang = Magang::findOrFail($id);
        $division = Division::all();
        return view("magang.edit",['magang' => $magang],['division' => $division]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'nim' => 'required|max:50',
            'sekolah' =>  'required|max:100',  
            'role' =>  'required',  
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

        $magang = new Magang();

        $magang->name = request('name');
        $magang->nim = request('nim');
        $magang->role = request('role');
        $magang->division = request('division');
        $magang->sekolah = request('sekolah');
        $magang->telephone = request('telephone');
        $magang->status = request('status');
        $magang->cover_image = $fileNameToStore;
        
        $magang->save();

        return redirect("/magang")->with('success',"magang Created Successfully");
    }
    

    public function show($id)
    {
        $magang = Magang::findOrFail($id);
        return view("magang.show",['magang' => $magang]);
    }

    public function destroy($id)
    {
        $magang = Magang::findOrFail($id);
        $magang->delete();

        if($magang->cover_image != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/cover_images/'.$magang->cover_image);
        }
        
        return redirect("/magang")->with("success","Magang Deleted Successfully");
    }

    public function update_record(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required|max:50',
            'nim' => 'required|max:50',
            'sekolah' =>  'required|max:100',  
            'role' =>  'required',  
            'division' =>  'required',  
            'telephone' =>  'required|min:10|max:15',  
            'status' =>  'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        $magang = Magang::findOrFail($id);
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
            Storage::delete('public/cover_images/'.$magang->cover_image);
        }

        $magang->name = request('name');
        $magang->nim = request('nim');
        $magang->role = request('role');
        $magang->division = request('division');
        $magang->sekolah = request('sekolah');
        $magang->telephone = request('telephone');
        $magang->status = request('status');
        if($request->hasFile('cover_image')){
            $magang->cover_image = $fileNameToStore;
        }

        $magang->save(); //this will UPDATE the record

        return redirect("/magang")->with("success","Account was updated successfully");
    }

    public function single($id)
    {
        $magang = Magang::where('division',$id)->orderBy('name') -> paginate(20);
        $division = Division::orderBy('name') -> get();

        return view('magang.single',['magang' => $magang,'division' => $division]);
    }

    public function pay($id)
    {
        $division = Division::orderBy('name') -> get();
        $magang = Magang::findOrFail($id);
        return view("magang.pay",['magang' => $magang,'division' => $division]);
    }    
}
