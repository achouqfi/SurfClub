@extends('layouts.sidebar')

@section('SideBar')
    <a href="/home" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
    <a href="/reservation/admin" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-swimmer me-2"></i>Reservation</a>
    <a href="/contact/admin" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-envelope me-2"></i>Message</a>
    <a href="/newsletter/admin" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-address-card me-2"></i>Newsletter</a>
    <a href="/package/table" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
            class="fas fa-archive me-2"></i>Package</a>
    <a href="/event/table" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
        class="fas fa-archive me-2"></i>Event</a>
    <a href="/gallery/table" class="list-group-item list-group-item-action bg-transparent second-text active"><i
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
                                <h2><b>Gallery</b> List</h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Photos</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($photos as $photo)
                        <tr>
                            <td>{{ $photo->id }}</td>
                            <td><img src="{{ asset($photo->path)  }}" alt="" height="60px"></td>
                            <td>
                                <form action="{{ url('gallery/annulation/'.$photo->id) }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}  
                                    <button href="" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></button>
                                </form>
                                    
                            </td>
                        </tr>
                        @endforeach		
                    </tbody>
                    <span>{{ $photos->links("pagination::bootstrap-4") }}</span>
                </table>
                </div>
            </div>        
        </div>
        <!-- add Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ url('/gallery/create') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="modal-header">						
                            <h4 class="modal-title">Add</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Photo :</label>
                                <input type="file" name="path" class="form-control" required>
                            </div>			
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Add">
                        </div>
                    </form>
                </div>
            </div>
        </div>
       
        
    </div>

@endsection
