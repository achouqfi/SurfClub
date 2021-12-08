<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Mail;


class ReservationController extends Controller
{
    public function index()
    {
        //affichage des Reservations dans la partie admin
        $Reservation= Reservation::paginate(5);
        return view('admin.reservation',["Reservations"=>$Reservation]);
    }

    public function frontOffice()
    {
        //affichage des Reservations dans la partie user&clien
        $Reservation= Reservation::orderBy('id', 'DESC')->get();
        return view('admin.reservation',["Reservations"=>$Reservation]);
    }

    public function store(Request $request)
    {
        //insertion des Reservations dans la DB
        $Reservation = new Reservation();
        $Reservation -> name = $request -> name;
        $Reservation -> email = $request -> email;
        $Reservation -> phone = $request -> phone;
        $Reservation -> date = $request -> date;
        $Reservation -> Nperson = $request -> Nperson;
        $Reservation -> message = $request -> message;
        $Reservation -> package_id = $request -> package_id;
 
        $Reservation ->save();

        $to_email ="a.chouqfi@gmail.com";

        $title="reservation sur safi surf club";
        $message="vous avez un nouveau reservation sur safi surf club:". $Reservation;
        // $cc="";
        $data = array("body"=>$message);

        Mail::send('mail', $data, function($message) use ($to_email, $title) {
            $message->to($to_email)->subject($title);
        });

        return redirect("/");
    }

    public function edit($id)
    {
        //modification de la Reservation
        $Reservation = Reservation::find($id);
        return view('admin.EditReservation',["Reservation"=>$Reservation]);
    }

    public function update(Request $request, $id)
    {
        //update de contenu des Reservations
        $Reservation = new Reservation();
        $Reservation -> name = $request -> name;
        $Reservation -> email = $request -> email;
        $Reservation -> phone = $request -> phone;
        $Reservation -> date = $request -> date;
        $Reservation -> Nperson = $request -> Nperson;
        $Reservation -> message = $request -> message;
        $Reservation -> package_id = $request -> package_id;
        $Reservation ->save();

        return redirect("Reservation")->with('editReservation','modification are saved');
    }

    public function destroy($id)
    {
        //suppression des Reservations
        Reservation::destroy($id);
        return redirect()->back();
    }
}
