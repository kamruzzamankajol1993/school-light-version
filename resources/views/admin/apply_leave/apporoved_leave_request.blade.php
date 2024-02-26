@extends('admin.master.master')

@section('title')
Approve Leave Request | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Approve Leave Request Information</h4>

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
                @if (Auth::guard('admin')->user()->can('Approve_leave_request_add'))
                <button class="btn btn-sm btn-primary dropdown-toggle waves-effect waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add Leave Request
                </button>
                @endif
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
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Staff</th>
                                <th>Leave Type</th>
                                <th>Leave Date</th>
                                <th>Days</th>
                                <th>Apply Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($apply_leave_details as $user)


                            <tr>
                                <td>

                                    {{ $loop->index+1 }}
 </td>
                                <td>

                                    @foreach($user_list as $all_user_list)


                                    @if($all_user_list->id == $user->staff_id)

                                    {{ $all_user_list->name}}
@endif
                                    @endforeach
                                </td>

                                <td>
                                    {{ $user->available_leave}}
                                </td>

                                <td>
                                    {{ date('d-m-Y', strtotime($user->from_date))}} - {{ date('d-m-Y', strtotime($user->to_date))}}
                                </td>

                                <td>
                                    {{ $user->total_days}}

                                </td>


                                <td>
                                    {{ date('d-m-Y', strtotime($user->apply_date))}}
                                </td>


                                <td>

                                    @if($user->status == 'Pending')
<span class="badge bg-warning">Pending</span>
                                        @elseif($user->status == 'Disapprove')
<span class="badge bg-danger">Disapprove</span>
@else

<span class="badge bg-success">Approved</span>
                                        @endif

                                </td>


                                <td>
                                    @if (Auth::guard('admin')->user()->can('Approve_leave_request_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary btn-sm waves-light waves-effect">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Leave Request
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.apply_leave.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf



                                                        <div class="row mt-3">

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Staff Name</label>

                                                                <select name="staff_id" class="form-control form-control-sm">

                                                                    <option>---Please Select---</option>
                                                                    @foreach($user_list as $all_income)

                                            <option value="{{ $all_income->id }}" {{ $user->staff_id == $all_income->id ? 'selected':'' }}>{{ $all_income->name }}</option>
                                                                    @endforeach
                                                                </select>



                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Apply Date</label>
                                                                <input type="date" class="form-control form-control-sm" id="name" value="{{ $user->apply_date }}" name="apply_date" placeholder="Enter Apply Date">


                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Available Leave</label>

                                                                <select name="available_leave" class="form-control form-control-sm">

                                                                    <option>---Please Select---</option>
                                                                    @foreach($leave_type_details as $all_income)

                                            <option value="{{ $all_income->name }}" {{ $user->available_leave == $all_income->name ? 'selected':'' }}>{{ $all_income->name }}</option>
                                                                    @endforeach
                                                                </select>

                                                                <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $user->id }}" name="id" placeholder="Enter Name">

                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Leave From Date</label>
                                                                <input type="date" class="form-control form-control-sm" id="name" value="{{ $user->from_date }}" name="from_date" placeholder="Enter Leave From Date">


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Leave To Date</label>
                                                                <input type="date" class="form-control form-control-sm" id="name" value="{{ $user->to_date }}" name="to_date" placeholder="Enter Leave To Date">


                                                            </div>




                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Attach Document</label>
                                                                <input type="file" class="form-control form-control-sm" id="name" name="doc" placeholder="Enter Date">


                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Reason</label>
                                                                <textarea class="form-control form-control-sm" id="name" name="reason">
                                                                   {{ $user->reason }}
                                                                        </textarea>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Note</label>
                                                                <textarea class="form-control form-control-sm" id="name" name="note">
                                                                    {{ $user->note }}
                                                                        </textarea>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Status</label><br>
                                                                <label class="radio-inline">

                                            <input type="radio" value="Pending" {{ $user->status == 'Pending' ? 'checked':'' }}  name="status" >Pending
                                                                 </label>

                                                                 <label class="radio-inline">

                                            <input type="radio" value="Approve" {{ $user->status == 'Approve' ? 'checked':'' }} name="status" >Approve
                                                                 </label>

                                                                 <label class="radio-inline">

                                            <input type="radio" value="Disapprove" {{ $user->status == 'Disapprove'? 'checked':'' }} name="status" >Disapprove
                                                                 </label>
                                                            </div>
                                                        </div>


                                                        <button type="submit"
                                                            class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif


                                    @if (Auth::guard('admin')->user()->can('Approve_leave_request_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-xl{{ $user->id }}"
                                        class="btn btn-info btn-sm waves-light waves-effect">
                                        <i class="fas fa-eye"></i></button>

                                 <!--  Small modal example -->
                                 <div class="modal fade bs-example-modal-xl{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Detail Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <table class="table table-striped">
                                                    <tbody><tr>
                                                    <th class="border0">Name</th>
                                                    <td class="border0"> @foreach($user_list as $all_user_list)


                                                        @if($all_user_list->id == $user->staff_id)

                                                        {{ $all_user_list->name}}
                    @endif
                                                        @endforeach</td>

                                                        <th class="border0">Submitted By</th>
                                                        <td class="border0"> @foreach($user_list as $all_user_list)


                                                            @if($all_user_list->id == $user->staff_id)

                                                            {{ $all_user_list->name}}
                        @endif
                                                            @endforeach</td>


                                                    <th class="border0">Staff ID</th>
                                                    <td class="border0">@foreach($user_list as $all_user_list)


                                                        @if($all_user_list->id == $user->staff_id)

                                                        {{ $all_user_list->staff_id}}
                    @endif
                                                        @endforeach</td>
                                                </tr>
                                                <tr>
                                                    <th>Leave Type</th>
                                                    <td>{{ $user->available_leave }}</td>
                                                    <th>Leave</th>
                                                    <td>{{ date('d-m-Y', strtotime($user->from_date))}} - {{ date('d-m-Y', strtotime($user->to_date))}}({{ $user->total_days }})</td>
                                                    <th>Apply Date</th>
                                                    <td>{{ date('d-m-Y', strtotime($user->apply_date))}}</td>
                                                </tr>




                                                <tr>
                                                    <th>Reason</th>
                                                    <td>{{ $user->reason }}</td>

                                                    <th>Note</th>
                                                    <td>{{ $user->note }}</td>
                                                    @if(empty($user->doc))

                                                @else
                                                    <th>Document</th>
                                                    <td><a type="button" href="{{ route('admin.apply_leave_doc_download',$user->id) }}"  class="btn btn-success btn-sm waves-effect waves-light" autocomplete="off">
                                                        <i class="uil-file-download-alt"></i></a></td>
                                                        @endif

                                                </tr>

                                            </tbody>
                                            </table>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                    @endif



                                    @if (Auth::guard('admin')->user()->can('Approve_leave_request_delete'))

                                    <button type="button" class="btn btn-danger btn-sm waves-light waves-effect"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.apporoved_leave.delete',$user->id) }}" method="POST"
                                        style="display: none;">
                                        @method('DELETE')
                                        @csrf

                                    </form>
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






<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Leave Request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.apply_leave.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf




                    <div class="row mt-3">

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Staff Name</label>

                            <select name="staff_id" class="form-control form-control-sm">

                                <option>---Please Select---</option>
                                @foreach($user_list as $all_income)

        <option value="{{ $all_income->id }}" >{{ $all_income->name }}</option>
                                @endforeach
                            </select>



                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Apply Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" value="<?php  echo date('Y-m-d')?>" name="apply_date" placeholder="Enter Apply Date">


                        </div>
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Available Leave</label>

                            <select name="available_leave" class="form-control form-control-sm">

                                <option>---Please Select---</option>
                                @foreach($leave_type_details as $all_income)

        <option value="{{ $all_income->name }}" >{{ $all_income->name }}</option>
                                @endforeach
                            </select>



                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Leave From Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" value="<?php  echo date('Y-m-d')?>" name="from_date" placeholder="Enter Leave From Date">


                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Leave To Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" value="<?php  echo date('Y-m-d')?>" name="to_date" placeholder="Enter Leave To Date">


                        </div>







                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Attach Document</label>
                            <input type="file" class="form-control form-control-sm" id="name" name="doc" placeholder="Enter Date">


                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="password">Reason</label>
                            <textarea class="form-control form-control-sm" id="name" name="reason">

                                    </textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="password">Note</label>
                            <textarea class="form-control form-control-sm" id="name" name="note">

                                    </textarea>
                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Status</label><br>
                            <label class="radio-inline">

                                <input type="radio" value="Pending"  name="status" >Pending
                             </label>

                             <label class="radio-inline">

                                <input type="radio" value="Approve" name="status" >Approve
                             </label>

                             <label class="radio-inline">

                                <input type="radio" value="Disapprove" name="status" >Disapprove
                             </label>
                        </div>
                    </div>


                    <button type="submit"
                        class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
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
@endsection
