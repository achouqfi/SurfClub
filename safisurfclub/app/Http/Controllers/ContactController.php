<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        //
        $Contact= Contact::get();
        return view('admin.message',["Contacts"=>$Contact]);
    }

    public function store(Request $request)
    {
        //insertion des Contact dans la DB
        $Contact = new Contact();
        $Contact -> name = $request -> name;
        $Contact -> email = $request -> email;
        $Contact -> subject = $request -> subject;
        $Contact -> message = $request -> message;

        $Contact ->save();
        return redirect()->back();
    }

    public function destroy( $id)
    {
        //suppression des Contact
        Contact::destroy($id);
        return redirect()->back()->with('dltContact','Contact are deleted');
    }

}
