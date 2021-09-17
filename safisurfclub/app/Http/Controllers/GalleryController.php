<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        //
        $Gallery= Gallery::paginate(5);
        return view('admin.Gallery',["photos"=>$Gallery]);
    }

    public function frontOffice()
    {
        //affichage des FeedBack dans la partie user&clien
        $Gallery= Gallery::orderBy('id', 'DESC')->get();
        return view('index',["Gallery"=>$Gallery]);

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
