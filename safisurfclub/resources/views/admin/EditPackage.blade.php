@extends('layouts.sidebar')

@section('content')
    <div class="container-fluid px-4">
        <div class="container-xxl">
        {{-- <div id="addEmployeeModal" class="modal fade"> --}}
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="{{ url('/package/add') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="modal-header">						
                            <h4 class="modal-title">Add Package</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="titre" required>
                            </div>
                            <div class="form-group">
                                <label>Price</label>
                                <input type="text" class="form-control" name="price" required>
                            </div>
                            <div class="form-group">
                                <label>Main photo</label>
                                <input type="file" class="form-control" name="principalPhoto" required>
                            </div>
                            <div class="form-group">
                                <label>Number of days</label>
                                <input type="text" class="form-control" name="dayNumbers" required>
                            </div>
                            <div class="form-group">
                                {{-- <label>Details</label> --}}
                                <textarea class="form-control"  name="description" id="Text" required>Details :</textarea>
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
