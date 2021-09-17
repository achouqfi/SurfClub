<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        //affichage des Reservations dans la partie admin
        $Reservation= Reservation::paginate(7);
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
        return redirect()->back();
// ->with('Reservation','Reservation are inserted')
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
