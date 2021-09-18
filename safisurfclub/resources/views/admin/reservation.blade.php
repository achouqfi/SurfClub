@extends('layouts.sidebar')

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
                                <td>
                                    <a href="mailto:{{ $reservation->email }}?subject=Réservation d'un cours de surf "  class="edit"><i class="material-icons"  title="mail">mail</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                             <!-- Delete Modal HTML -->
                            <div id="deleteEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ url('reservation/annulation/'.$reservation->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }} 
                                            <div class="modal-header">						
                                                <h4 class="modal-title">Delete Reservation</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">					
                                                <p>Are you sure you want to delete these reservation?</p>
                                                <p class="text-warning"><small>This action cannot be undone.</small></p>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                                <input type="submit" class="btn btn-danger" value="Delete">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            @endforeach			
                        </tbody>
                    </table>
                   
        
       
    </div>


@endsection
