<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //
        $Gallery= Gallery::orderBy('id', 'DESC')->paginate(5);
        return view('admin.Gallery',["photos"=>$Gallery]);
    }

    public function store(Request $request)
    {
        //insertion des Gallery dans la DB
        $Gallery = new Gallery();

        //insertion de la photo
        $file = $request->path;
        $ext = $file->getClientOriginalExtension();
        $filename = time() . ".".$ext;
        $filepath ="storage/public/";
        $file->move($filepath,$filename);
        $Gallery->path = $filepath.$filename;

        $Gallery ->save();
        return redirect()->back()->with('Gallery','Gallery are inserted');
    }

    public function destroy($id)
    {
        //suppression des Gallery
        Gallery::destroy($id);
        return redirect()->back()->with('dltGallery','Gallery are deleted');
    }
}
