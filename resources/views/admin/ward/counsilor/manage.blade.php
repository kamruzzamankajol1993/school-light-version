@extends('admin.master.master')

@section('title')
Ward Counsilor List ss| Sakho
@endsection


@section('body')

 <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">Ward Counsilor List</h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Shakho</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Ward Counsilor List</a></li>

                                </ol>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="float-right d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle waves-effect waves-light" type="button" data-toggle="modal" data-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add New Ward Counsilor
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>SL.</th>
                                                <th>Ward No.</th>
                                                <th>Admin Name</th>
                                                <th>Role</th>
                                                <th>Email</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                        	@foreach($adminLists as $key=>$adminnew)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>
                                             @foreach($wards as $ward_new )
                                                @if($adminnew->ward_id == $ward_new->id)
                                                {{ $ward_new->ward_no_eng }} ({{$ward_new->city_cor_name_eng  }})
                                                @endif
                                             @endforeach
                                            </td>
                                                <td>{{ $adminnew->name }}</td>
                                                <td>

                                              @if($adminnew->role_id == 3)

                                                Admin
                                              @else
                                              Counsilor

                                              @endif


                                            </td>
                                                <td>{{ $adminnew->email }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-primary waves-light waves-effect" onclick="window.location.href='{{ route('admin.ward_counsilor.view',$adminnew->id) }}'"><i class="fa fa-eye"></i></button>


                                                        <a href="{{ route('admin.ward_counsilor.edit',$adminnew->id) }}" type="button" class="btn btn-primary waves-light waves-effect"><i class="fas fa-pencil-alt"></i></a>


                                                        <button type="button" class="btn btn-primary waves-light waves-effect" onclick="deleteTag({{ $adminnew->id }})"><i class="far fa-trash-alt"></i></button>

 <form id="delete-form-{{ $adminnew->id }}" action="{{ route('admin.ward_counsilor.destroy',$adminnew->id) }}" method="POST" style="display: none;">
                                                    @csrf
                                                    
                                                </form>
                                                    </div>
                                                </td>
                                            </tr>
                                          @endforeach
                                          

                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <!--  Modal content for the above example -->
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Add Ward Admin Information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="custom-validation" action="{{ route('admin.ward_admin.store') }}" method="post" enctype="multipart/form-data">
                            	@csrf
                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label>Ward No:</label>
                                                    <select id="" name="ward_id" class="form-control">
                                                        <option value="">--Select--</option>
                                                        @foreach($wards as $ward)
                                                        <option value="{{ $ward->id }}">{{ $ward->ward_no_eng }}({{ $ward->city_cor_name_eng }})</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Role:</label>
                                                    <select id="" name="role_id" class="form-control">
                                                        <option value="">--Select--</option>
                                                        <option value="3">Counsilor</option>
                                                        <option value="2">Admin</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" name="name" class="form-control" />
                                                </div>

                                                <div class="form-group">
                                                    <label>Image:</label>
                                                    <input type="file" class="form-control" name="image" />
                                                </div>


                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group">
                                                    <label>Email Address:</label>
                                                    <input type="text" class="form-control" name="email"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>Phone Number:</label>
                                                    <input type="text" class="form-control" name="phone"/>
                                                </div>

                                                <div class="form-group">
                                                    <label>Password:</label>
                                                    <input type="password" class="form-control"  name="password"/>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="float-right d-none d-md-block">
                                            <div class="form-group mb-4">
                                                <div>
                                                    <button type="submit" class="btn btn-primary btn-lg  waves-effect waves-light mr-1">
                                                        Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </form>
                        </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
<script type="text/javascript">
        function deleteTag(id) {
            swal({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
                confirmButtonClass: 'btn btn-success',
                cancelButtonClass: 'btn btn-danger',
                buttonsStyling: false,
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    event.preventDefault();
                    document.getElementById('delete-form-'+id).submit();
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === swal.DismissReason.cancel
                ) {
                    swal(
                        'Cancelled',
                        'Your data is safe :)',
                        'error'
                    )
                }
            })
        }
    </script>
@endsection