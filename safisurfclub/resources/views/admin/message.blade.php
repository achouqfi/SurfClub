@extends('layouts.sidebar')

@section('content')
    <div class="container-fluid px-4">
        <div class="container-xxl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2><b>Message</b> List</h2>
                            </div>

                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Message</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Contacts as $contact)
                            <tr>
                                <td> {{ $contact->id }}</td>
                                <td> {{ $contact->name}}</td>
                                <td> {{ $contact->email }}</td>
                                <td> {{ $contact->subject }}</td>
                                <td> {{ $contact->message }}</td>
                                <td>
                                    <a href="mailto:{{ $contact->email }}?subject={{ $contact->subject }}"  class="edit"><i class="material-icons"  title="mail">mail</i></a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                            <!-- Delete Modal HTML -->
                            <div id="deleteEmployeeModal" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <form action="{{ url('contact/annulation/'.$contact->id) }}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }} 
                                            <div class="modal-header">						
                                                <h4 class="modal-title">Delete message</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            </div>
                                            <div class="modal-body">					
                                                <p>Are you sure you want to delete these message?</p>
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
        </div>
    </div>

@endsection
