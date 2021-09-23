<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function index()
    {
        //
        $Newsletter= Newsletter::orderBy('id', 'DESC')->paginate(7);
        return view('admin.newsletter',["Newsletters"=>$Newsletter]);
    }

    public function store(Request $request)
    {
        //insertion des Newsletter dans la DB
        $Newsletter = new Newsletter();
        $Newsletter -> email = $request -> email;

        $Newsletter ->save();
        return redirect()->back()->with('Newsletter','Newsletter are inserted');
    }

    public function destroy( $id)
    {
        //suppression des Newsletter
        Newsletter::destroy($id);
        return redirect()->back()->with('dltNewsletter','Newsletter are deleted');
    }

}
