<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;

class FeedBackController extends Controller
{
    public function index()
    {
        //
        $FeedBack= FeedBack::paginate(7);
        return view('admin.FeedBack',["FeedBack"=>$FeedBack]);
    }

    public function frontOffice()
    {
        //affichage des FeedBack dans la partie user&clien
        $FeedBack= FeedBack::orderBy('id', 'DESC')->get();
        return view('index',["FeedBack"=>$FeedBack]);
    }
    public function store(Request $request)
    {
        //insertion des FeedBack dans la DB
        $FeedBack = new FeedBack();
        $FeedBack -> name = $request -> name;
        $FeedBack -> message = $request -> message;

        $FeedBack ->save();
        return redirect()->back()->with('FeedBack','FeedBack are inserted');
    }

    public function destroy($id)
    {
        //suppression des FeedBack
        FeedBack::destroy($id);
        return redirect("FeedBack")->with('dltFeedBack','Contact are deleted');
    }
    
}
