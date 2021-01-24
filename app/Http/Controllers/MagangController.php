<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Magang;

class MagangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $magang = Magang::orderBy('name')->paginate(10);

        return view("magang.magang",['magang' => $magang]);
    }
 
    public function store(Request $request)
    {

        $this->validate($request,[ 'name' => 'required|max:30'           
            ]);

        $magang = new Magang();

        $magang->name = request('name');
        
        $magang->save();

        return redirect("/magang")->with("success","Magang Created Successfully");
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
        
        return redirect("/magang")->with("success","Magang Deleted Successfully");
    }

    public function edit($id)
    {
        $magang = Magang::findOrFail($id);
        return view("magang.edit",['magang' => $magang]);
    }

    public function update_record($id)
    {
        $magang = Magang::findOrFail($id);

        $magang->name = request('name');

        $magang->save(); //this will UPDATE the record with id=1

        return redirect("/magang")->with("success","Magang Updated Successfully");
    }
}
