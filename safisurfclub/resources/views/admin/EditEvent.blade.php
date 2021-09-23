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
    <a href="/event/table" class="list-group-item list-group-item-action bg-transparent second-text active"><i
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
                                <h2>Update : <b>{{ $Event->title }}</b>  </h2>
                            </div>
                        </div>
                    </div>
                    <form action="{{ url('/update/event/'.$Event->id) }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="_method" value="PUT">

                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" value="{{ $Event->title }}" name="title" required>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea type="text" class="form-control"  name="description" required>{{ $Event->description }} </textarea>
                            </div>
                            <div class="form-group">
                                <label>Date</label>
                                <input type="date" class="form-control" value="{{ $Event->date }}" name="date" required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="/event/table" class="btn btn-light" data-dismiss="modal"  aria-hidden="true">Cancel</a>
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>
                </div>
                <span>{{ $Event->links( "pagination::bootstrap-4") }}</span>
            </div>        
        </div>
        
    </div>

@endsection
