<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;        
use Mail;


class ContactController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

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

        $to_name ="Admin";
        $to_email ="ayoubchouqfi015@gmail.com";

        // $name=$agent->name." ".$agent->prenom;
        // $mail=$agent->email;

        $title="contact notif";
        $message="you have a new notif";
        $cc="";
        $data = array("body"=>$message);

        // Mail::send('mail.client', $data, function($message) use ($to_name, $to_email,$title,$cc) {
        // $message->to($to_email, $to_name)
        //         ->cc($cc)
        //         ->subject($title);
        // $message->from('a.chouqfi@gmail.com','ayoub');
        //     });
        Mail::send('mail', $data, function($message) use ($to_email, $title) {
            $message->to($to_email)->subject($title);
        });

        // dd("ddd");
        
        //insertion des Contact dans la DB

        return redirect()->back();
    }

    public function destroy( $id)
    {
        //suppression des Contact
        Contact::destroy($id);
        return redirect()->back()->with('dltContact','Contact are deleted');
    }

}
