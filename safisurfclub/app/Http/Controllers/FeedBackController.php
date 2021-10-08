<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use Illuminate\Http\Request;
use Mail;


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

        $to_email ="a.chouqfi@gmail.com";

        $title="Feedback sur safi surf club";
        $message="vous avez une nouvelle Feedback sur safi surf club:". $FeedBack;
        // $cc="";
        $data = array("body"=>$message);

        Mail::send('mail', $data, function($message) use ($to_email, $title) {
            $message->to($to_email)->subject($title);
        });

        return redirect()->back();
    }

    public function destroy($id)
    {
        //suppression des FeedBack
        FeedBack::destroy($id);
        return redirect()->back()->with('dltFeedBack','Contact are deleted');
    }
}
