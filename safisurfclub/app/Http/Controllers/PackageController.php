<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //affichage des Packages dans la partie admin
        $Package= Package::paginate(6);
        return view('admin.pack',["Packages"=>$Package]);
    }


    public function store(Request $request)
    {
        //insertion des Packages dans la DB
        $Package = new Package();
        $Package -> titre = $request -> titre;
        $Package -> description = $request -> description;
        $Package -> price = $request -> price;
        $Package -> dayNumbers = $request -> dayNumbers;

        //insertion de la photo
        $file = $request->principalPhoto;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . ".".$ext;
        $filepath ="storage/public/";
        $file->move($filepath,$filename);
        $Package->principalPhoto = $filepath.$filename;

        $Package ->save();
        return redirect()->back()->with('package','Package are inserted');

    }

    public function edit($id)
    {
        //modification les Package
        $Package = Package::find($id);
        return view('admin.EditPackage',["package"=>$Package]);
    }

    public function update(Request $request, $id)
    {
        //update de contenu des Packages
        $Package =Package::find($id);
        
        $Package -> titre = $request -> titre;
        $Package -> description = $request -> description;
        $Package -> price = $request -> price;
        $Package -> dayNumbers = $request -> dayNumbers;

        //insertion de la photo
        $file = $request->principalPhoto;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . ".".$ext;
        $filepath ="storage/public/";
        $file->move($filepath,$filename);
        $Package->principalPhoto = $filepath.$filename;

        $Package ->save();

        return redirect('/package/table')->with('editPackage','modification are saved');
    }

    public function destroy($id)
    {
        //suppression des Packages
        Package::destroy($id);
        return redirect()->back()->with('dltPackage','Package are deleted');
    }
}
