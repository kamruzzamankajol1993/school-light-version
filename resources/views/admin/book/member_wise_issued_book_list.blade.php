@extends('admin.master.master')

@section('title')

Member Information
@endsection


@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Member Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="">Forms /</li>
                    <li class="breadcrumb-item active">Member Management</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<!-- end page title -->
<div class="row mb-4">
    <div class="col-xl-4">
        <div class="card h-100">
            <div class="card-body">
                <div class="text-center">
                    {{-- <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-18" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">


                        </div>
                    </div> --}}
                    <div class="clearfix"></div>
                    <div>


                        @if($type == 'staff')

                        @if($main_student_or_staff_detail->gender == 'Male')

                        @if(empty($main_student_or_staff_detail->photo))

                        <img src="{{ asset('/') }}public/stu_demo.jpg" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $main_student_or_staff_detail->photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @else
                        @if(empty($main_student_or_staff_detail->photo))

                        <img src="{{ asset('/') }}public/stu_fe_demo.png" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $main_student_or_staff_detail->photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @endif


                        @else

                        @if($main_student_or_staff_detail->gender == 'Male')

                        @if(empty($main_student_or_staff_detail->student_photo))

                        <img src="{{ asset('/') }}public/stu_demo.jpg" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $main_student_or_staff_detail->student_photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @else
                        @if(empty($main_student_or_staff_detail->student_photo))

                        <img src="{{ asset('/') }}public/stu_fe_demo.png" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $main_student_or_staff_detail->student_photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @endif
                        @endif
                    </div>
                    <h5 class="mt-3 mb-1">
                        {{ $main_student_or_staff_detail->first_name.' '.$main_student_or_staff_detail->last_name }}
                    </h5>
                    {{-- <p class="text-muted">UI/UX Designer</p> --}}

                    <div class="mt-4">
                        {{-- <button type="button" class="btn btn-light btn-sm"><i class="uil uil-envelope-alt me-2"></i> Message</button> --}}
                    </div>
                </div>

                <hr class="my-4">

                <div class="text-muted">
                    @if($type == 'staff')
                    <h5 class="font-size-16">Member Id:</h5>
                    <p>{{ $main_student_or_staff_detail->staff_id}}</p>

                    @else

                    <h5 class="font-size-16">Admission No:</h5>
                    <p>{{ $main_student_or_staff_detail->admission_no}}</p>
                    @endif
                    <div class="table-responsive mt-4">
                        <div>
                            <p class="mb-1">Library Card No :</p>
                            <h5 class="font-size-16">{{ $main_student_or_staff_detail->library_id}}</h5>
                        </div>

                        <div class="mt-4">
                            <p class="mb-1">Gender :</p>
                            <h5 class="font-size-16">{{ $main_student_or_staff_detail->gender}}</h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">Member Type :</p>


                            <h5 class="font-size-16">
                                <?php
 $admin_id = DB::table('admins')->where('staff_main_id',$main_student_or_staff_detail->id)->value('id');
 $role_id =DB::table('model_has_roles')->where('model_id',$admin_id)->value('role_id');
 $role_name = DB::table('roles')->where('id',$role_id)->value('name');

        ?>

                                {{ $role_name }}
                            </h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">Mobile Number :</p>

                            @if($type== 'staff')

                            <h5 class="font-size-16 text-danger">{{ $main_student_or_staff_detail->phone}}</h5>
                            @else

                            <h5 class="font-size-16">{{ $main_student_or_staff_detail->mobile_number}}</h5>

                            @endif
                        </div>




                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-8">
        <div class="card mb-0">
            <div class="card-body">
                @include('flash_message')

                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('issued_book_list_save') }}" method="POST" enctype="multipart/form-data">

                            @csrf

                            <div class="row">
                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="password">Books</label>
                                    <select name="book_id" class="form-control form-control-sm">
                                        <option value="">---->Select Book<----</option> @foreach ($book_list as
                                                $user_class_update) <option value="{{ $user_class_update->id }}">
                                                {{ $user_class_update->book_title }}</option>

                                        @endforeach
                                    </select>
                                    <span id="qu" class="text-danger" style="padding-left: 5px;"></span>
                                </div>

                                <div class="form-group col-md-12 col-sm-12">
                                    <label for="name">Return Date</label>
                                    <input type="date" class="form-control form-control-sm" id="name"
                                        value="<?php echo date('Y-m-d') ?>" name="return_date"
                                        placeholder="Enter Return Date">

                                    <input type="hidden" name="member_id"
                                        value="{{ $main_student_or_staff_detail->id }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-sm btn-success mt-4 pr-4 pl-4">Save</button>
                        </form>
                    </div>
                    <hr style="height: 10px;" class="mt-4">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                                style="border-collapse: collapse; border-spacing: 0; width: 100%;font-size:13px;">
                                <thead>
                                    <tr>
                                        <th>Book Title</th>

                                        <th>Book Number</th>
                                        <th>Issue Date</th>
                                        <th>Due Return Date</th>
                                        <th>Return Date</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($issue_book_list as $all_data_list)
                                    <tr>
                                        <td>
                                            <?php $book_name = DB::table('books')->where('id',$all_data_list->book_id)->value('book_title'); ?>

                                            {{ $book_name }}




                                        </td>

                                        <td>
                                            <?php $book_number = DB::table('books')->where('id',$all_data_list->book_id)->value('book_number'); ?>

                                            {{ $book_number }}




                                        </td>
                                        <td>

                                            {{ date('d-m-Y', strtotime($all_data_list->issue_date))}}


                                        </td>

                                        <td>

                                            {{ date('d-m-Y', strtotime($all_data_list->return_date))}}


                                        </td>

                                        <td>

                                            @if(empty($all_data_list->mainreturn))


                                          @else
                                          {{ date('d-m-Y', strtotime($all_data_list->mainreturn))}}

                                            @endif




                                        </td>
                                        <td>

                                            @if(!empty($all_data_list->mainreturn))


                                            @else

                                            <button type="button" data-bs-toggle="modal"
                                            data-bs-target=".bs-example-modal-lg{{ $all_data_list->id }}"
                                            class="btn btn-primary btn-sm waves-light waves-effect">
                                            <i class="fas fa-plus"></i></button>

                                        <div class="modal fade bs-example-modal-lg{{ $all_data_list->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-sm">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Confirm Return</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close">
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('return_date_book') }}"
                                                            method="POST" enctype="multipart/form-data">

                                                            @csrf



                                                            <div class="row ">
                                                                <div class="form-group col-md-12 col-sm-12">
                                                                    <label for="name">Return Date</label>
                                                                    <input type="text" disabled class="form-control form-control-sm" value="{{ date('d-m-Y', strtotime($all_data_list->return_date))}}"  name="return_date" placeholder="Enter To Card Number">
                                                                    <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $all_data_list->id }}" name="id" placeholder="Enter Name">
                                                                    <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $all_data_list->book_id }}" name="book_id" placeholder="Enter Name">
                                                                </div>


                                                            </div>









                                                            <button type="submit"
                                                                class="btn btn-primary mt-4 pr-4 pl-4">save</button>
                                                        </form>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
@endif

                                    </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</div>
<!-- end row -->
@endsection


@section('script')



<script type="text/javascript">
    function deleteTag(id) {
        swal({
            title: 'Are you sure?',
            text: "You will not be able to revert this!",
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
                document.getElementById('delete-form-' + id).submit();
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
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar1").click(function () {
        ++i;
        $("#dynamicAddRemove1").append('<tr><td><input type="text" name="doctitle[]" id="doctitle' + i +
            '" placeholder="Enter Title" class="form-control form-control-sm" /></td><td><input type="file" name="doc[]" id="doc' +
            i +
            '" placeholder="Enter class" class="form-control form-control-sm" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field1"><i class="uil-trash"></i></button></td></tr>'
        );
    });
    $(document).on('click', '.remove-input-field1', function () {
        $(this).parents('tr').remove();
    });

</script>


<script type="text/javascript">
    $("select[name='book_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('quantity_search_of_book') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                console.log(data.options);

                var mainline = 'Available Quantity: ' + data.options;

                $("#qu").html(mainline);

            }
        });
    });

</script>
@endsection
