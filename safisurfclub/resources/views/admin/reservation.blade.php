@auth
@if (Auth::user())

@extends('layouts.sidebar')

@section('SideBar')
    <a href="/home" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
    <a href="/reservation/admin" class="list-group-item list-group-item-action bg-transparent second-text active"><i
            class="fas fa-swimmer me-2"></i>Reservation</a>
    <a href="/contact/admin" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-envelope me-2"></i>Message</a>
    <a href="/newsletter/admin" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-address-card me-2"></i>Newsletter</a>
    <a href="/package/table" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-archive me-2"></i>Package</a>
    <a href="/event/table" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
        class="fas fa-archive me-2"></i>Event</a>
    <a href="/gallery/table" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-photo-video me-2"></i>Gallery</a>
    <a href="/feedBack/table" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-comment-dots me-2"></i>FeedBack</a>
@endsection


@section('content')
    <div class="container-fluid px-4">
        <div class="container-xxl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Last <b>Reservations</b></h2>
                            </div>

                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th>Number of person</th>
                                <th>Message</th>
                                <th>Package</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($Reservations as $reservation)

                            <tr>
                                <td> {{ $reservation->id }}</td>
                                <td> {{ $reservation->name}}</td>
                                <td> {{ $reservation->email }}</td>
                                <td> {{ $reservation->phone }}</td>
                                <td> {{ $reservation->date }}</td>
                                <td class="text-center"> {{ $reservation->Nperson }}</td>
                                <td> {{ $reservation->message }}</td>
                                <td> {{ $reservation->package_id }}</td>
                                <td class="d-flex">
                                    <a href="mailto:{{ $reservation->email }}?subject=R??servation d'un cours de surf "  class="edit mt-2"><i class="material-icons"  title="mail">mail</i></a>
                                    <form action="{{ url('reservation/annulation/'.$reservation->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="delete" data-toggle="modal"><i class="material-icons mt-1" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach			
                        </tbody>
                        <span>{{ $Reservations->links("pagination::bootstrap-4") }}</span>
                    </table>
    </div>
@endsection

@endif
@endauth
