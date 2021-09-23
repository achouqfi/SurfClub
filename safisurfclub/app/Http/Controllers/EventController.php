<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $Event= Event::orderBy('id', 'DESC')->paginate(7);
        return view('admin.event',["Events"=>$Event]);
    }

    public function store(Request $request)
    {
        //insertion des Event dans la DB
        $Event = new Event();
        $Event -> title = $request -> title;
        $Event -> description = $request -> description;
        $Event -> date = $request -> date;

        $Event ->save();
        return redirect()->back();
    }


    public function edit($id)
    {
        //modification les Package
        $Event = Event::find($id);
        return view('admin.EditEvent',["Event"=>$Event]);
    }

    public function update(Request $request,$id)
    {
        //insertion des Event dans la DB
        $Event = Event::find($id);
        $Event -> title = $request -> title;
        $Event -> description = $request -> description;
        $Event -> date = $request -> date;

        $Event ->save();
        return redirect('event/table');
    }

    public function destroy($id)
    {
        //suppression des Event
        Event::destroy($id);
        return redirect()->back()->with('dltEvent','Contact are deleted');
    }
}
