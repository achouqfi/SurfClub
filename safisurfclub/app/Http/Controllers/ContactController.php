<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;        
use Mail;


class ContactController extends Controller
{
    


    public function index()
    {
        //
        $Contact= Contact::paginate(6);
        return view('admin.message',["Contacts"=>$Contact]);
    }

    public function store(Request $request)
    {
        $Contact = new Contact();
        $Contact -> name = $request -> name;
        $Contact -> email = $request -> email;
        $Contact -> subject = $request -> subject;
        $Contact -> message = $request -> message;
        $Contact ->save();

        $to_email ="surfsafi@gmail.com";

        $title="Message safi surf club";
        $message="vous avez un nouveau message sur safi surf club:". $Contact;
        // $cc="";
        $data = array("body"=>$message);

        Mail::send('mail', $data, function($message) use ($to_email, $title) {
            $message->to($to_email)->subject($title);
        });

        return redirect()->back();
    }

    public function destroy( $id)
    {
        //suppression des Contact
        Contact::destroy($id);
        return redirect()->back()->with('dltContact','Contact are deleted');
    }

}
