@extends('admin.master.master')

@section('title')
Staff Information
@endsection


@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Staff Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="">Forms /</li>
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
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
                    <div class="dropdown float-end">
                        <a class="text-body dropdown-toggle font-size-18" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true">
                            <i class="uil uil-ellipsis-v"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item"
                                href="{{ route('admin.staff.edit',$single_staff_info->id) }}">Edit</a>
                            <a class="dropdown-item" href="{{ route('admin.staff') }}">Staff List</a>

                            @if($single_staff_info->status == 0)
                            <a class="dropdown-item" href="{{ route('admin.staff.status',['status'=>1,'id'=>$single_staff_info->id]) }}">Enable</a>
                            @else
                            <a class="dropdown-item" href="{{ route('admin.staff.status',['status'=>0,'id'=>$single_staff_info->id]) }}">Disable</a>

                            @endif

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div>

                        @if($single_staff_info->gender == 'Male')

                        @if(empty($single_staff_info->photo))

                        <img src="{{ asset('/') }}public/stu_demo.jpg" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $single_staff_info->photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @else
                        @if(empty($single_staff_info->photo))

                        <img src="{{ asset('/') }}public/stu_fe_demo.png" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $single_staff_info->photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @endif
                    </div>
                    <h5 class="mt-3 mb-1">{{ $single_staff_info->first_name.' '.$single_staff_info->last_name }}
                    </h5>
                    {{-- <p class="text-muted">UI/UX Designer</p> --}}

                    <div class="mt-4">
                        {{-- <button type="button" class="btn btn-light btn-sm"><i class="uil uil-envelope-alt me-2"></i> Message</button> --}}
                    </div>
                </div>

                <hr class="my-4">

                <div class="text-muted">
                    <h5 class="font-size-16">Staff ID:</h5>
                    <p>{{ $single_staff_info->staff_id}}</p>
                    <div class="table-responsive mt-4">
                        <div>
                            <p class="mb-1">Role :</p>
                            <h5 class="font-size-16">{{ $single_staff_info->role}}</h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">Designation :</p>


                            <h5 class="font-size-16">{{ $single_staff_info->designation}}

                            </h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">Department :</p>



                            <h5 class="font-size-16">{{ $single_staff_info->department}}</h5>


                        </div>
                        <div class="mt-4">
                            <p class="mb-1">EPF No :</p>
                            <h5 class="font-size-16">{{ $single_staff_info->epf_no}}</h5>
                        </div>

                        <div class="mt-4">
                            <p class="mb-1">Basic Salary :</p>
                            <h5 class="font-size-16">{{ $single_staff_info->basic_salary}}</h5>
                        </div>

                        <div class="mt-4">
                            <p class="mb-1">Contract Type :</p>
                            <h5 class="font-size-16">{{ $single_staff_info->contract_type}}</h5>
                        </div>


                        <div class="mt-4">
                            <p class="mb-1">Work Shift:</p>
                            <h5 class="font-size-16">{{ $single_staff_info->work_shift}}</h5>
                        </div>

                        <div class="mt-4">
                            <p class="mb-1">Location:</p>
                            <h5 class="font-size-16">{{ $single_staff_info->location}}</h5>
                        </div>


                        <div class="mt-4">
                            <p class="mb-1">Date Of Joining:</p>
                            <h5 class="font-size-16">{{ date('d/m/Y', strtotime($single_staff_info->date_of_joining))}}</h5>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-8">
        <div class="card mb-0">
            @include('flash_message')
            <!-- Nav tabs -->
            <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="tab" href="#about" role="tab">
                        <i class="uil uil-user-circle font-size-20"></i>
                        <span class="d-none d-sm-block">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#tasks" role="tab">
                        <i class="uil uil-transaction font-size-20"></i>
                        <span class="d-none d-sm-block">Payroll</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#leaves" role="tab">
                        <i class="uil uil-stopwatch font-size-20"></i>
                        <span class="d-none d-sm-block">Leaves</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#attendance" role="tab">
                        <i class="uil uil-calendar-alt font-size-20"></i>
                        <span class="d-none d-sm-block">Attendance</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#document" role="tab">
                        <i class="uil uil-file-alt font-size-20"></i>
                        <span class="d-none d-sm-block">Document</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#timeline" role="tab">
                        <i class="uil uil-layers-alt font-size-20"></i>
                        <span class="d-none d-sm-block">Timeline</span>
                    </a>
                </li>
            </ul>
            <!-- Tab content -->
            <div class="tab-content p-4">
                <div class="tab-pane active" id="about" role="tabpanel">
                    <div>
                        <div>
                            <table class="table table-hover table-striped tmb0">
                                <tbody>
                                    <tr>
                                        <td class="col-md-4">Phone</td>
                                        <td class="col-md-5">{{$single_staff_info->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Emergency Contact Number</td>
                                        <td>{{$single_staff_info->emergency_contact_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>
                                            {{ $single_staff_info->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Gender</td>
                                        <td>{{ $single_staff_info->gender}}</td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>{{ date('d/m/Y', strtotime($single_staff_info->date_of_birth))}}</td>
                                    </tr>
                                    <tr>
                                        <td>Marital Status</td>
                                        <td>{{ $single_staff_info->marital_status}}</td>
                                    </tr>
                                    <tr>
                                        <td>Father Name</td>
                                        <td>{{ $single_staff_info->father_name}}</td>
                                    </tr>
                                    <tr>
                                        <td>Mother Name</td>
                                        <td>
                                            {{ $single_staff_info->mother_name}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Qualification</td>
                                        <td>{{ $single_staff_info->qualification}}</td>
                                    </tr>


                                    <tr>
                                        <td>Work Experience</td>
                                        <td>{{ $single_staff_info->work_experience}}</td>
                                    </tr>
                                    <tr>
                                        <td>Note</td>
                                        <td>{{ $single_staff_info->note}}</td>
                                    </tr>

                                    <tr>
                                        <td>PAN Number</td>
                                        <td>{{ $single_staff_info->pan_number}}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
<hr>
                        <div>
                            <h5 class="font-size-16 mb-4">Address Detail</h5>
                            <div class="tshadow mb25 bozero">

                                <div class="table-responsive around10 pt0">
                                    <table class="table table-hover table-striped tmb0"><tbody>
                                                                                        <tr>
                                                <td class="col-md-4">Current Address</td>
                                                <td class="col-md-5">{{ $single_staff_info->current_address}}</td>
                                            </tr>
                                                                                        <tr>
                                                <td>Permanent Address</td>
                                                <td>{{ $single_staff_info->permanent_address}}</td>
                                            </tr>
                                                                                    </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div>
                            <h5 class="font-size-16 mb-4">Bank Account Details</h5>

                            <div class="tshadow mb25 bozero">

    <div class="table-responsive around10 pt10">
        <table class="table table-hover table-striped tmb0">
                                                    <tbody><tr>
                <td class="col-md-4">Account Title</td>
                <td class="col-md-5">{{ $single_staff_info->account_title}}</td>

            </tr>
                                                    <tr>
                <td>Bank Name</td>
                <td>{{ $single_staff_info->bank_name}}</td>
            </tr>
                                                    <tr>
                <td>Bank Branch Name</td>
                <td>{{ $single_staff_info->bank_branch_name}}</td>
            </tr>

            <tr>
                <td>Bank Account Number</td>
                <td>{{ $single_staff_info->bank_account_number}}</td>
            </tr>
                                                    <tr>
                <td>IFSC Code</td>
                <td>{{ $single_staff_info->ifsc_code}}</td>

            </tr>

                                                    </tbody>
        </table>
    </div>
                            </div>
                        </div>
                        <hr>
                        <div>
                            <h5 class="font-size-16 mb-4">Social Media Link</h5>

                            <table class="table table-hover table-striped tmb0">
                                <tbody>

                                    <tr>
                                        <td class="col-md-4">Facebook URL</td>
                                        <td class="col-md-5">{{ $single_staff_info->facebook_url }}</td>
                                    </tr>
                                    <tr>
                                        <td class="col-md-4">Twitter URL</td>
                                        <td class="col-md-5">{{ $single_staff_info->twitter_url }}</td>
                                    </tr>
                                    <tr>
                                        <td>Linkedin URL</td>
                                        <td>{{ $single_staff_info->linkedin_url }}</td>
                                    </tr>
                                    <tr>
                                        <td>Instagram URL</td>
                                        <td>{{ $single_staff_info->instagram_url }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>


                    </div>
                </div>
                <div class="tab-pane" id="tasks" role="tabpanel">
                    <div>
                        <div class="alert alert-danger" role="alert">
                         Record Not Found
                        </div>






                    </div>
                </div>
                <div class="tab-pane" id="leaves" role="tabpanel">

                    @if(count($apply_leave_details) == 0)
                    <div>
                        <div class="alert alert-danger" role="alert">
                            Record Not Found
                           </div>
                    </div>
                    @else
                    <div class="table-responsive">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>SL</th>

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



                                        @if (Auth::guard('admin')->user()->can('apply_leave_update'))
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




                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>

                <div class="tab-pane" id="attendance" role="tabpanel">
                    <div>
                        <div class="alert alert-danger" role="alert">
                            Record Not Found
                           </div>
                    </div>
                </div>
                <div class="tab-pane" id="document" role="tabpanel">

                    @if(empty($single_staff_info->resume) || empty($single_staff_info->joining_letter) || empty($single_staff_info->other_documents))

                    <div class="tab-pane" id="timeline" role="tabpanel">
                        <div class="alert alert-danger" role="alert">
                            Record Not Found
                           </div>
                    </div>

                    @else


                    <div class="table-responsive mt-2">

                        <table class="table table-bordered dt-responsive nowrap">
                            <tr>

                                <th>Title</th>
                                <th>Action</th>
                            </tr>

                            <tr>

                                <th>Resume</th>
                                <th>

                                    <a type="button" href="{{ route('staff_doc_download',['title'=>'Resume','id'=>$single_staff_info->id]) }}"  class="btn btn-success btn-sm waves-effect waves-light" autocomplete="off">
                                    <i class="uil-file-download-alt"></i></a>


                                    <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg11"  class="btn btn-primary btn-sm waves-effect  btn-sm waves-light" autocomplete="off">
                                        <i class="uil-pen"></i></button>

                                           <!--  Large modal example -->
                     <div class="modal fade bs-example-modal-lg11" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Update Document</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('staff_doc_update') }}" enctype="multipart/form-data">
                                        @csrf

                                        {{-- <input type="hidden" name="student_id" value="{{ $value->student_id }}"> --}}
                                        <input type="hidden" name="id" value="{{ $single_staff_info->id }}">
<label>Resume</label>
                                        <input type="hidden" name="document_title" class="form-control form-control-sm mt-2" value="Resume">
                                        <input type="file" name="resume" class="form-control form-control-sm mt-2" >

                                        <button type="submit"   class="btn btn-primary btn-sm waves-effect  btn-sm waves-light mt-2" >
                                            submit</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->



                                </th>
                            </tr>

                            <tr>

                                <th>Joining Letter</th>
                                <th>

                                    <a type="button" href="{{ route('staff_doc_download',['title'=>'Joining Letter','id'=>$single_staff_info->id]) }}"  class="btn btn-success btn-sm waves-effect waves-light" autocomplete="off">
                                    <i class="uil-file-download-alt"></i></a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg22"  class="btn btn-primary btn-sm waves-effect  btn-sm waves-light" autocomplete="off">
                                        <i class="uil-pen"></i></button>

                                           <!--  Large modal example -->
                     <div class="modal fade bs-example-modal-lg22" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Update Document</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('staff_doc_update') }}" enctype="multipart/form-data">
                                        @csrf

                                        {{-- <input type="hidden" name="student_id" value="{{ $value->student_id }}"> --}}
                                        <input type="hidden" name="id" value="{{ $single_staff_info->id }}">
<label>Joining Letter</label>
                                        <input type="hidden" name="document_title" class="form-control form-control-sm mt-2" value="Joining Letter">
                                        <input type="file" name="joining_letter" class="form-control form-control-sm mt-2" >

                                        <button type="submit"   class="btn btn-primary btn-sm waves-effect  btn-sm waves-light mt-2" >
                                            submit</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->

                                </th>
                            </tr>


                            <tr>

                                <th>Other Document</th>
                                <th>

                                    <a type="button" href="{{ route('staff_doc_download',['title'=>'Other Document','id'=>$single_staff_info->id]) }}"  class="btn btn-success btn-sm waves-effect waves-light" autocomplete="off">
                                    <i class="uil-file-download-alt"></i></a>

                                    <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg33"  class="btn btn-primary btn-sm waves-effect  btn-sm waves-light" autocomplete="off">
                                        <i class="uil-pen"></i></button>

                                           <!--  Large modal example -->
                     <div class="modal fade bs-example-modal-lg33" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="myLargeModalLabel">Update Document</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="{{ route('staff_doc_update') }}" enctype="multipart/form-data">
                                        @csrf

                                        {{-- <input type="hidden" name="student_id" value="{{ $value->student_id }}"> --}}
                                        <input type="hidden" name="id" value="{{ $single_staff_info->id }}">
<label>Other Document</label>
                                        <input type="hidden" name="document_title" class="form-control form-control-sm mt-2" value="Other Document">
                                        <input type="file" name="other_documents" class="form-control form-control-sm mt-2" >

                                        <button type="submit"   class="btn btn-primary btn-sm waves-effect  btn-sm waves-light mt-2" >
                                            submit</button>
                                    </form>
                                </div>
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                    </div><!-- /.modal -->
                                </th>
                            </tr>
                        </table>

                    </div>
                    @endif
                </div>
                <div class="tab-pane" id="timeline" role="tabpanel">
                    <div class="alert alert-danger" role="alert">
                        Record Not Found
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
        $("#dynamicAddRemove1").append('<tr><td><input type="text" name="doctitle[]" id="doctitle'+i+'" placeholder="Enter Title" class="form-control form-control-sm" /></td><td><input type="file" name="doc[]" id="doc'+i+'" placeholder="Enter class" class="form-control form-control-sm" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field1"><i class="uil-trash"></i></button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field1', function () {
        $(this).parents('tr').remove();
    });
</script>
@endsection
