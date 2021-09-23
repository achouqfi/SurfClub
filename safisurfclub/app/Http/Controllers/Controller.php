<?php

namespace App\Http\Controllers;

use App\Models\FeedBack;
use App\Models\Gallery;
use App\Models\Package;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function frontOffice()
    {
        //affichage des Packages dans la partie user&clien
        $Package= Package::orderBy('id', 'DESC')->get();

        $Gallery= Gallery::orderBy('id', 'DESC')->get();
        // return view('index',["Gallery"=>$Gallery]);

        //affichage des FeedBack dans la partie user&clien
        $FeedBack= FeedBack::get();

        return view('index',["FeedBacks"=>$FeedBack,"Packages"=>$Package,"Gallery"=>$Gallery]);
    }
}
