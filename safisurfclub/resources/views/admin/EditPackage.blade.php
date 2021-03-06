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
    <a href="/package/table" class="list-group-item list-group-item-action bg-transparent second-text active"><i
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
                                <h2>Update : <b>{{ $package->titre }}</b>  </h2>
                            </div>
                        </div>
                    </div>
                    <form action="{{ url('/update/package/'.$package->id) }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <input type="hidden" name="_method" value="PUT">
                        <div class="modal-header">						
                            <h4 class="modal-title">Update : <b>{{ $package->titre }}</b>  </h4>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" value="{{ $package->titre }}" name="titre" required>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" value="{{ $package->price }}" name="price" required>
                            </div>
                            <div class="form-group">
                                <label>Main photo</label>
                                <div class="d-flex">
                                    <img src="{{ asset($package->principalPhoto)  }}" alt="" height="40px">
                                    <input type="file" class="form-control" value="{{ $package->photoPrincipal }}" name="principalPhoto" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Number of days</label>
                                <input type="text" class="form-control" value="{{ $package->dayNumbers }}" name="dayNumbers" required>
                            </div>
                            <div class="form-group">
                                {{-- <label>Details</label> --}}
                                <textarea class="form-control"  name="description" id="Text" required>{{ $package->description }}</textarea>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="/package/table" class="btn btn-light" data-dismiss="modal"  aria-hidden="true">Cancel</a>
                            <input type="submit" class="btn btn-success" value="Update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @section('scriptText')
	
	<script>
		ClassicEditor
			.create( document.querySelector( '#Text' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>

@endsection
@endsection
