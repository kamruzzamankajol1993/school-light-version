@extends('admin.master.master')

@section('title')
 Member List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0"> Member Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $ins_name }} </a></li> --}}
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">

    <div class="col-sm-6">
        <div class="float-right d-md-block">
            <div class="dropdown">

            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('flash_message')
                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;font-size:13px;">
                        <thead>
                            <tr>

                                <th>Library Card No</th>
                                <th>Admission No</th>
                                <th>Name</th>
                                <th>Member Type</th>
                                <th>Phone</th>
                               <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($library_info_list as $user)



                                <tr>
<td>{{ $user->card_no }}</td>

                                <td>

                                    @if($user->member_type == 'staff')



                                   @else
                                   <?php $admission_name = DB::table('main_students')->where('id',$user->member_id)->value('admission_no') ?>
{{ $admission_name }}
                                   @endif



                                </td>
                                <td>

                                    @if($user->member_type == 'staff')
                                    <?php

                                    $staff_first_name = DB::table('staff')->where('id',$user->member_id)->value('first_name');
                                    $staff_last_name = DB::table('staff')->where('id',$user->member_id)->value('last_name');

                                    ?>
                                     {{ $staff_first_name.' '.$staff_last_name }}

                                    @else
                                    <?php
                                    $student_first_name = DB::table('main_students')->where('id',$user->member_id)->value('first_name');
                                    $student_last_name = DB::table('main_students')->where('id',$user->member_id)->value('last_name');
                                    ?>
{{ $student_first_name.' '.$student_last_name }}
                                    @endif
                                </td>

                                <td>
                                    @if($user->member_type == 'staff')

        <?php
 $admin_id = DB::table('admins')->where('staff_main_id',$user->member_id)->value('id');
 $role_id =DB::table('model_has_roles')->where('model_id',$admin_id)->value('role_id');
 $role_name = DB::table('roles')->where('id',$role_id)->value('name');

        ?>

        {{ $role_name }}

                                    @else
Student

                                    @endif
                                </td>

                                <td>
                                    @if($user->member_type == 'staff')

                                    <?php $phone_staff = DB::table('staff')->where('id',$user->member_id)->value('phone') ?>
                                    {{ $phone_staff }}

                                    @else
                                    <?php $phone_student = DB::table('main_students')->where('id',$user->member_id)->value('mobile_number') ?>
 {{ $phone_student }}
                                    @endif

                                </td>






                                <td>



                                    @if (Auth::guard('admin')->user()->can('issue_book_add'))

                                    <a type="button" href="{{ route('member_wise_issued_book_list',['id' => $user->member_id,'type'=>$user->member_type]) }}" class="btn btn-success btn-sm waves-light waves-effect"
                                         ><i
                                            class="uil-books"></i></a>



                                    @endif

                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->







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
            confirmButtonText: 'Yes, Remove it!',
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
@endsection
