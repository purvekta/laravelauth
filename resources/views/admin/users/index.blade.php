@extends('layouts.backend.app')
@push('header')
<link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('backend/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}">

@endpush

@section('content')
<body>
    <!-- Left Panel -->

    <!-- Left Panel -->

       <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

       

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                             <li class="active">Users</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>user</th>
                                            <th>Email</th>
                                            <th>Created at</th>
											<th>updated at</th>
											<th>Action</th>
                                        </tr>                                            
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>$320,800</td>
											<td>Edinburgh</td>
                                            <td>
											 <button type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#viewModal">
                            <i class ="fa fa-eye"></i>
                        </button>
						<button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#editModal">
                             <i class ="fa fa-pencil"></i>
                        </button>
                        <button type="button" class="btn btn-danger mb-1" data-toggle="modal" data-target="#deleteModal">
                              <i class ="fa fa-trash-o"></i>
                        </button>

											</td>
											                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
				
            </div><!-- .animated -->
        </div><!-- .content -->
		<div class="animated">

                <div class="modal fade" id="viewModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" data-backdrop="static" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">view</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    There are three species of zebras: the plains zebra, the mountain zebra and the Grévy's zebra. The plains zebra
                                    and the mountain zebra belong to the subgenus Hippotigris, but Grévy's zebra is the sole species of subgenus
                                    Dolichohippus. The latter resembles an ass, to which it is closely related, while the former two are more
                                    horse-like. All three belong to the genus Equus, along with other living equids.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" data-backdrop="static"  aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Edit User</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="card">
                                                   
                                                    <div class="card-body card-block">
                                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Username</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <p class="form-control-static">User user</p>
                                                                </div>
                                                            </div>
                                                            <div class="row form-group">
                                                                <div class="col col-md-3"><label class=" form-control-label">Userid</label></div>
                                                                <div class="col-12 col-md-9">
                                                                    <p class="form-control-static">User1234</p>
                                                                </div>
                                                            </div>
                                                            
                                                          
                                                         
                                                                <div class="row form-group">
                                                                    <div class="col col-md-3"><label class=" form-control-label">Role</label></div>
                                                                    <div class="col col-md-9">
                                                                        <div class="form-check">
                                                                            <div class="radio">
                                                                                <label for="radio1" class="form-check-label ">
                                                                                    <input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">Option 1
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label for="radio2" class="form-check-label ">
                                                                                    <input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">Option 2
                                                                                </label>
                                                                            </div>
                                                                            <div class="radio">
                                                                                <label for="radio3" class="form-check-label ">
                                                                                    <input type="radio" id="radio3" name="radios" value="option3" class="form-check-input">Option 3
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                                                                       </form>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-dot-circle-o"></i> Submit
                                                        </button>
                                                        
                                                    </div>
                                                </div>
                                                
                           
                        </div>
                    </div>
                </div>
  

              
                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" data-backdrop="static" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog modal-sm" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticModalLabel">Delete</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <p>
                                    This is a static modal, backdrop click will not close it.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>
                        </div>
                    </div>
                </div>



            </div>


    </div><!-- /#right-panel -->

    

</body>

</html>



@endsection
@push('footer')
<script src="{{asset('backend/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('backend/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('backend/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/vendors/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
<script src="{{asset('backend/assets/js/init-scripts/data-table/datatables-init.js')}}"></script>

@endpush