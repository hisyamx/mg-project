<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Karyawan;

class KaryawanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $karyawan = Karyawan::orderBy('name')->paginate(10);

        return view("karyawan.index",['karyawan' => $karyawan]);
    }
 
    public function store(Request $request)
    {

        $this->validate($request,[ 'name' => 'required|max:30'           
            ]);

        $karyawan = new Karyawan();

        $karyawan->name = request('name');
        
        $karyawan->save();

        return redirect("/karyawan")->with("success","Karyawan Created Successfully");
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
        
        return redirect("/karyawan")->with("success","Karyawan Deleted Successfully");
    }

    public function edit($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view("karyawan.edit",['karyawan' => $karyawan]);
    }

    public function update_record($id)
    {
        $karyawan = Karyawan::findOrFail($id);

        $karyawan->name = request('name');

        $karyawan->save(); //this will UPDATE the record with id=1

        return redirect("/karyawan")->with("success","Karyawan Updated Successfully");
    }
}
