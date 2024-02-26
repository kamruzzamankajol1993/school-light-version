@extends('admin.master.master')

@section('title')

Student Information
@endsection


@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Student Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="">Forms /</li>
                    <li class="breadcrumb-item active">School Management</li>
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
                                href="{{ route('admin.student.edit',$single_student_info->id) }}">Edit</a>
                            <a class="dropdown-item" href="{{ route('admin.student') }}">Student List</a>

                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div>

                        @if($single_student_info->gender == 'Male')

                        @if(empty($single_student_info->student_photo))

                        <img src="{{ asset('/') }}public/stu_demo.jpg" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $single_student_info->student_photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @else
                        @if(empty($single_student_info->student_photo))

                        <img src="{{ asset('/') }}public/stu_fe_demo.png" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $single_student_info->student_photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @endif
                    </div>
                    <h5 class="mt-3 mb-1">{{ $single_student_info->first_name.' '.$single_student_info->last_name }}
                    </h5>
                    {{-- <p class="text-muted">UI/UX Designer</p> --}}

                    <div class="mt-4">
                        {{-- <button type="button" class="btn btn-light btn-sm"><i class="uil uil-envelope-alt me-2"></i> Message</button> --}}
                    </div>
                </div>

                <hr class="my-4">

                <div class="text-muted">
                    <h5 class="font-size-16">Admission No:</h5>
                    <p>{{ $single_student_info->admission_no}}</p>
                    <div class="table-responsive mt-4">
                        <div>
                            <p class="mb-1">Roll Number :</p>
                            <h5 class="font-size-16">{{ $single_student_info->roll_number}}</h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">Class :</p>


                            <h5 class="font-size-16">{{ $single_student_info->class}}
                                ({{ $single_student_info->created_at->format('Y').'-'.($single_student_info->created_at->format('Y')+1)}})
                            </h5>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">Department :</p>

                            @if($single_student_info->department == 'not available')

                            <h5 class="font-size-16 text-danger">{{ $single_student_info->department}}</h5>
                            @else

                            <h5 class="font-size-16">{{ $single_student_info->department}}</h5>

                            @endif
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">Section :</p>
                            <h5 class="font-size-16">{{ $single_student_info->section}}</h5>
                        </div>

                        <div class="mt-4">
                            <p class="mb-1">Gender :</p>
                            <h5 class="font-size-16">{{ $single_student_info->gender}}</h5>
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
                        <span class="d-none d-sm-block">Fees</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="tab" href="#messages" role="tab">
                        <i class="uil uil-stopwatch font-size-20"></i>
                        <span class="d-none d-sm-block">Exam</span>
                    </a>
                </li> --}}
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
                                        <td class="col-md-4">Admission Date</td>
                                        <td class="col-md-5">{{ date('d/m/Y', strtotime($single_student_info->created_at))}}</td>
                                    </tr>
                                    <tr>
                                        <td>Date of Birth</td>
                                        <td>{{ date('d/m/Y', strtotime($single_student_info->date_of_birth))}}</td>
                                    </tr>
                                    <tr>
                                        <td>Category</td>
                                        <td>
                                            {{ $single_student_info->category}}</td>
                                    </tr>
                                    <tr>
                                        <td>Mobile Number</td>
                                        <td>{{ $single_student_info->mobile_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Caste</td>
                                        <td>{{ $single_student_info->caste}}</td>
                                    </tr>
                                    <tr>
                                        <td>Religion</td>
                                        <td>{{ $single_student_info->religion}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>{{ $single_student_info->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>Medical History</td>
                                        <td>
                                            {{ $single_student_info->medical_history}}
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Note</td>
                                        <td>{{ $single_student_info->note}}</td>
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
                                                <td class="col-md-5">{{ $single_student_info->current_address}}</td>
                                            </tr>
                                                                                        <tr>
                                                <td>Permanent Address</td>
                                                <td>{{ $single_student_info->permanent_address}}</td>
                                            </tr>
                                                                                    </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <hr>
                        <div>
                            <h5 class="font-size-16 mb-4">Parent / Guardian Details</h5>

                            <div class="tshadow mb25 bozero">

    <div class="table-responsive around10 pt10">
        <table class="table table-hover table-striped tmb0">
                                                    <tbody><tr>
                <td class="col-md-4">Father Name</td>
                <td class="col-md-5">{{ $single_student_info->father_name}}</td>
                <td rowspan="3">

                    @if(empty($single_student_info->father_photo))

                    <img src="{{ asset('/') }}public/f_demo.png" alt=""
                        class="profile-user-img img-responsive img-circle">


                    @else

                    <img src="{{ asset('/') }}{{ $single_student_info->father_photo }}" alt=""
                        class="profile-user-img img-responsive img-circle">
                    @endif


                </td>
            </tr>
                                                    <tr>
                <td>Father Phone</td>
                <td>{{ $single_student_info->father_phone}}</td>
            </tr>
                                                    <tr>
                <td>Father Occupation</td>
                <td>{{ $single_student_info->father_occupation}}</td>
            </tr>

            <tr>
                <td>Father Yearly Income</td>
                <td>{{ $single_student_info->father_yearly_incme}}</td>
            </tr>
                                                    <tr>
                <td>Mother Name</td>
                <td>{{ $single_student_info->mother_name}}</td>
                <td rowspan="3">

                    @if(empty($single_student_info->mother_photo))

                    <img src="{{ asset('/') }}public/m_demo.png" alt=""
                        class="profile-user-img img-responsive img-circle">


                    @else

                    <img src="{{ asset('/') }}{{ $single_student_info->mother_photo }}" alt=""
                        class="profile-user-img img-responsive img-circle">
                    @endif



                </td>
            </tr>
                                                    <tr>
                <td>Mother Phone</td>
                <td>{{ $single_student_info->mother_phone}}</td>

            </tr>
                                                    <tr>
                <td>Mother Occupation</td>
                <td>{{ $single_student_info->mother_occupation}}</td>
            </tr>

            <tr>
                <td>Mother Yearly Income</td>
                <td>{{ $single_student_info->mother_yearly_income}}</td>
            </tr>
                                                    <tr>

                <td>Guardian Name</td>
                <td>{{ $single_student_info->guardian_name}}</td>


                <td rowspan="3">


                    @if($single_student_info->guardian_relation == 'Father')

                    @if(empty($single_student_info->guardian_photo))

                    <img src="{{ asset('/') }}public/f_demo.png" alt=""
                        class="profile-user-img img-responsive img-circle">


                    @else

                    <img src="{{ asset('/') }}{{ $single_student_info->guardian_photo }}" alt=""
                        class="profile-user-img img-responsive img-circle">
                    @endif

                    @else
                    @if(empty($single_student_info->guardian_photo))

                    <img src="{{ asset('/') }}public/m_demo.png" alt=""
                        class="profile-user-img img-responsive img-circle">


                    @else

                    <img src="{{ asset('/') }}{{ $single_student_info->guardian_photo }}" alt=""
                        class="profile-user-img img-responsive img-circle">
                    @endif

                    @endif





                </td>

            </tr>
                                                    <tr>
                <td>Guardian Email</td>
                <td>{{ $single_student_info->guardian_email}}</td>
            </tr>
                                                    <tr>
                <td>Guardian Relation</td>
                <td>{{ $single_student_info->guardian_relation}}</td>
            </tr>
                                                    <tr>
                <td>Guardian Phone</td>
                <td>{{ $single_student_info->guardian_phone}}</td>
            </tr>
                                                  <tr>
                <td>Guardian Occupation</td>
                <td>{{ $single_student_info->guardian_occupation}}</td>
            </tr>
                                                    <tr>
                <td>Guardian Address</td>
                <td>{{ $single_student_info->guardian_address}}</td>
            </tr>
                                                    </tbody>
        </table>
    </div>
                            </div>
                        </div>
                        <hr>

                        <hr>

                        <div>
                            <h5 class="font-size-16 mb-4">Miscellaneous Details</h5>

                            <table class="table table-hover table-striped tmb0">
                                <tbody>
                                                                                <tr>
                                        <td class="col-md-4">Blood Group</td>
                                        <td class="col-md-5">{{ $single_student_info->blood_group}}</td>
                                    </tr>
                                                                                <tr>
                                        <td class="col-md-4">Student House</td>
                                        <td class="col-md-5">{{ $single_student_info->student_house}}</td>
                                    </tr>
                                                                                <tr>
                                        <td class="col-md-4">Height</td>
                                        <td class="col-md-5">{{ $single_student_info->height}}</td>
                                    </tr>
                                                                                <tr>
                                        <td class="col-md-4">Weight</td>
                                        <td class="col-md-5">{{ $single_student_info->weight}}</td>
                                    </tr>
                                                                                <tr>
                                        <td class="col-md-4">As on Date</td>
                                        <td class="col-md-5">{{ $single_student_info->as_on_date}}</td>
                                    </tr>
                                                                                <tr>
                                        <td class="col-md-4">Previous School Details</td>
                                        <td class="col-md-5">{{ $single_student_info->previous_school_details}}</td>
                                    </tr>
                                                                                <tr>
                                        <td class="col-md-4">National Identification Number</td>
                                        <td class="col-md-5">{{ $single_student_info->national_identification_number}}</td>
                                    </tr>
                                                                                <tr>
                                        <td>Birth Certificate Number</td>
                                        <td>{{ $single_student_info->birth_certificate_number}}</td>
                                    </tr>
                                                                                <tr>
                                        <td>Bank Account Number</td>
                                        <td>{{ $single_student_info->bank_account_number}}</td>
                                    </tr>
                                                                                <tr>
                                        <td>Bank Name</td>
                                        <td>{{ $single_student_info->bank_name}}</td>
                                    </tr>
                                                                                <tr>
                                        <td>IFSC Code</td>
                                        <td>{{ $single_student_info->ifsc_code}}</td>
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
                <div class="tab-pane" id="messages" role="tabpanel">
                    <div>
                        <div class="alert alert-danger" role="alert">
                            Record Not Found
                           </div>
                    </div>
                </div>
                <div class="tab-pane" id="document" role="tabpanel">

                    @if(empty($documnent_info))

                    <div class="tab-pane" id="timeline" role="tabpanel">
                        <div class="alert alert-danger" role="alert">
                            Record Not Found
                           </div>
                    </div>

                    @else

                    <button type="button"  class="btn btn-primary btn-sm waves-effect  btn-sm waves-light" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                        <i class="uil-file-upload"></i><span style="margin-left:3px;">Add New Document</span></button>
                         <!--  Large modal example -->
                         <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Add New Document</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('admin.student_doc.store') }}" enctype="multipart/form-data">
                                            @csrf
                                         <input type="hidden" name="student_id" value="{{ $single_student_info->id}}">


                                         <table class="table table-bordered" id="dynamicAddRemove1">
                                            <tr>
                                                <th>Document Title</th>
                                                <th>Documents</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="doctitle[]" id="doctitle" placeholder="Enter Title" class="form-control form-control-sm" /></td><td><input type="file" name="doc[]" id="doc" placeholder="Enter class" class="form-control form-control-sm" /></td>
                                                <td><button type="button" name="add" id="dynamic-ar1" class="btn btn-outline-primary"><i class="uil-plus"></i></button></td>
                                            </tr>
                                        </table>

                                        <button type="submit"   class="btn btn-primary btn-sm waves-effect  btn-sm waves-light mt-2" >
                                            submit</button>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    <div class="table-responsive mt-2">
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                            <thead>
                                <tr>
                                    <th>SL</th>

                                    <th>Title</th>

                                    <th>Document</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
@foreach($documnent_info as $key => $value)


                                    <tr>
                                        <td>{{ $key+1 }}</td>
                                        <td>{{ $value->document_title }}</td>
                                        <td><a type="button" href="{{ route('student_related_docDownload',$value->id) }}"  class="btn btn-success btn-sm waves-effect  btn-sm waves-light" autocomplete="off">
                                            <i class="uil-file-download-alt"></i><span style="margin-left:3px;">Download Document</span></a></td>
                                        <td>
                                            <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $value->id }}"  class="btn btn-primary btn-sm waves-effect  btn-sm waves-light" autocomplete="off">
                                            <i class="uil-pen"></i></button>

                                               <!--  Large modal example -->
                         <div class="modal fade bs-example-modal-lg{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="myLargeModalLabel">Update Document</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form method="post" action="{{ route('admin.student_doc.update') }}" enctype="multipart/form-data">
                                            @csrf

                                            {{-- <input type="hidden" name="student_id" value="{{ $value->student_id }}"> --}}
                                            <input type="hidden" name="id" value="{{ $value->id }}">

                                            <input type="text" name="document_title" class="form-control form-control-sm mt-2" value="{{ $value->document_title }}">
                                            <input type="file" name="documents" class="form-control form-control-sm mt-2" >

                                            <button type="submit"   class="btn btn-primary btn-sm waves-effect  btn-sm waves-light mt-2" >
                                                submit</button>
                                        </form>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->

                                            <button type="button"  class="btn btn-danger btn-sm waves-effect  btn-sm waves-light" onclick="deleteTag({{ $value->id}})" autocomplete="off">
                                                <i class="uil-trash-alt"></i></button>

                                                <form id="delete-form-{{ $value->id }}" action="{{ route('admin.student_doc.delete',$value->id) }}" method="POST" style="display: none;">
                                                    @method('DELETE')
                                                                                  @csrf

                                                                              </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                        </table>
                    </div>
                    @endif
                </div>
                {{-- <div class="tab-pane" id="timeline" role="tabpanel">
                    <div class="alert alert-danger" role="alert">
                        Record Not Found
                       </div>
                </div> --}}
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
