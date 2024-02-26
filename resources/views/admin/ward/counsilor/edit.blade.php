@extends('admin.master.master')

@section('title')
{{ $adminLists->name }} | Sakho
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
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Update</a></li>

                                </ol>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="float-right d-md-block">
                               
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">

                                   <form class="custom-validation" action="{{ route('admin.ward_counsilor.update') }}" method="post" enctype="multipart/form-data">
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
                                 <option value="{{ $ward->id }}" {{ $ward->id == $adminLists->ward_id ? 'selected':'' }}>{{ $ward->ward_no_eng }}({{ $ward->city_cor_name_eng }})</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Role:</label>
                                                    <select id="" name="role_id" class="form-control">
                                                        <option value="">--Select--</option>
                                                        <option value="3"{{ $adminLists->role_id == 3 ? 'selected':'' }}>Counsilor</option>
                                                        <option value="2"{{ $adminLists->role_id == 2 ? 'selected':'' }}>Admin</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label>Name:</label>
                                                    <input type="text" name="name" value="{{ $adminLists->name }}" class="form-control" />
                                                   <input type="hidden" name="id" value="{{ $adminLists->id }}" class="form-control" />
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
                                                    <input type="text" class="form-control" name="email"/ value="{{ $adminLists->email }}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Phone Number:</label>
                                                    <input type="text" class="form-control" name="phone"/ value="{{ $adminLists->phone }}">
                                                </div>

                                                <div class="form-group">
                                                    <label>Password:</label>
                                   <input type="password" class="form-control"  name="password" value="{{ $adminLists->password }}"/>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="float-right d-none d-md-block">
                                            <div class="form-group mb-4">
                                                <div>
                                                    <button type="submit" class="btn btn-primary btn-lg  waves-effect waves-light mr-1">
                                                        Update
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </form>

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

           
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