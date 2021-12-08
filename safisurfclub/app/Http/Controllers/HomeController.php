<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\Contact;
use App\Models\feedBack;
use App\Models\Newsletter;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function index()
    {

        $reservations= Reservation::orderBy('id', 'DESC')->paginate(3);
        $feedBack= feedBack::All();
        $Newsletter = Newsletter::All();
        $contact= Contact::All();

        // count
        $reservationsCount = count($reservations);

        // count
        $contactCount = count($contact);

        // count
        $NewsletterCount = count($Newsletter);

        // count
        $feedBackCount = count($feedBack);

        return view('dashboard',["reservations"=>$reservations,"contactCount"=>$contactCount,"reservationsCount" => $reservationsCount,"NewsletterCount" => $NewsletterCount,"feedBackCount" => $feedBackCount]);
    }
}