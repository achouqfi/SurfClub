<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        //
        $Contact= Contact::paginate(6);
        return view('admin.Contact',["Contact"=>$Contact]);
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
        return redirect()->back()->with('Contact','Contact are inserted');
    }

    public function destroy( $id)
    {
        //suppression des Contact
        Contact::destroy($id);
        return redirect("Contact")->with('dltContact','Contact are deleted');
    }

}
