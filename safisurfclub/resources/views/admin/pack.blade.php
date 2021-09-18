@extends('layouts.sidebar')

@section('content')
    <div class="container-fluid px-4">
        <div class="container-xxl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2><b>Packages</b> List</h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Employee</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Main photo</th>
                                <th>Details</th>
                                <th>Price</th>
                                <th>Number of days</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($Packages as $package)
                        <tr>
                            <td>{{ $package->id }}</td>
                            <td>{{ $package->titre }}</td>
                            <td><img src="{{ asset($package->principalPhoto)  }}" alt="" height="60px"></td>
                            <td>{!! $package->description !!}</td>
                            <td>{{ $package->price }} €/ Personne</td>
                            <td>{{ $package->dayNumbers }}</td>
                            {{-- <td><img src="{{ asset($package->principalPhoto)  }}" alt="" height="60px"></td> --}}
                            <td>
                                <a href="#editEmployeeModal"  class="edit"><i class="material-icons"  title="edit">edit</i></a>
                                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                        <!-- Delete Modal HTML -->
                        <div id="deleteEmployeeModal" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{ url('delete/package/'.$package->id) }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}                                         <div class="modal-header">						
                                            <h4 class="modal-title">Delete package</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        </div>
                                        <div class="modal-body">					
                                            <p>Are you sure you want to delete these package?</p>
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
        <!-- Edit Modal HTML -->
        <div id="addEmployeeModal" class="modal fade">
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
        <!-- Edit Modal HTML -->
        <div id="editEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Edit Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Phone</label>
                                <input type="text" class="form-control" required>
                            </div>					
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Delete Modal HTML -->
        <div id="deleteEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">						
                            <h4 class="modal-title">Delete Employee</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">					
                            <p>Are you sure you want to delete these Records?</p>
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
