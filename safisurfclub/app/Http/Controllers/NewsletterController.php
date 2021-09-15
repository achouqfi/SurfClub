<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    public function index()
    {
        //
        $Newsletter= Newsletter::paginate(6);
        return view('admin.Newsletter',["Newsletter"=>$Newsletter]);
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
        return redirect("Newsletter")->with('dltNewsletter','Newsletter are deleted');
    }

}
