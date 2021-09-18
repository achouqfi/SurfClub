<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Gallery;
use App\Models\Package;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function index()
    {
        //
        $FeedBack= FeedBack::paginate(7);
        return view('admin.FeedBack',["FeedBacks"=>$FeedBack]);
    }



    public function frontOffice()
    {
        //affichage des Packages dans la partie user&clien
        $Package= Package::orderBy('id', 'DESC')->get();

        $Gallery= Gallery::orderBy('id', 'DESC')->get();
        // return view('index',["Gallery"=>$Gallery]);

        //affichage des FeedBack dans la partie user&clien
        $FeedBack= FeedBack::get();

        return view('index',["FeedBacks"=>$FeedBack,"Packages"=>$Package,"Gallery"=>$Gallery]);
    }

    public function store(Request $request)
    {
        //insertion des FeedBack dans la DB
        $FeedBack = new FeedBack();
        $FeedBack -> name = $request -> name;
        $FeedBack -> email = $request -> email;
        $FeedBack -> message = $request -> message;

        $FeedBack ->save();
        return redirect()->back()->with('FeedBack','FeedBack are inserted');
    }

    public function destroy($id)
    {
        //suppression des FeedBack
        FeedBack::destroy($id);
        return redirect()->back()->with('dltFeedBack','Contact are deleted');
    }
}
