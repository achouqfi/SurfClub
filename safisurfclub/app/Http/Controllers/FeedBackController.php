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


    

    public function store(Request $request)
    {
        //insertion des FeedBack dans la DB
        $FeedBack = new FeedBack();
        $FeedBack -> name = $request -> name;
        $FeedBack -> email = $request -> email;
        $FeedBack -> message = $request -> message;

        $FeedBack ->save();
        return redirect()->back();
    }

    public function destroy($id)
    {
        //suppression des FeedBack
        FeedBack::destroy($id);
        return redirect()->back()->with('dltFeedBack','Contact are deleted');
    }
}
