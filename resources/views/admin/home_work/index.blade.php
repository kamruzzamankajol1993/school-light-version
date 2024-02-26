@extends('admin.master.master')

@section('title')
HW/CW Information | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0"> HW/CW List</h4>

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
                @if (Auth::guard('admin')->user()->can('home_work_add'))
                <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New HW/CW
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
                                <th>Type</th>
                                <th>Class</th>
                                <th>Department</th>
                                <th>Section</th>
                                <th>Subject</th>
                                <th>Homework Date</th>
                                <th>Submission Date</th>
                                <th>Evaluation Date</th>
                                <th>Created By</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach($home_work_detail as $all_home_work)
                            <tr>
                            <td>{{ $loop->index+1 }}</td>

                            <td>
                                {{ $all_home_work->status }}
                            </td>
                            <td>
                                <?php $class_name = DB::table('sranis')->where('id',$all_home_work->class)->value('name'); ?>
                                {{ $class_name }}
                            </td>
                            <td>
                                <?php $dep_name = DB::table('departments')->where('id',$all_home_work->department)->value('name'); ?>
                                {{ $dep_name }}
                            </td>
                            <td>
                                <?php $section_name = DB::table('sections')->where('id',$all_home_work->section)->value('name'); ?>
                                {{ $section_name }}
                            </td>

                            <td>
                                <?php $subject_name = DB::table('subjects')->where('id',$all_home_work->subject)->value('name'); ?>
                                {{ $subject_name }}
                            </td>
                            <td>
                                {{ date('d/m/Y', strtotime($all_home_work->homework_date)) }}
                            </td>

                            <td>
                                {{ date('d/m/Y', strtotime($all_home_work->submission_date)) }}
                            </td>


                            <td>
                                @if(empty($all_home_work->evaluation_date))

                                @else
                                {{ date('d/m/Y', strtotime($all_home_work->evaluation_date)) }}
                                @endif
                            </td>

                            <td>
                                {{ $all_home_work->created_by }}
                            </td>
                            <td>
                                @if (Auth::guard('admin')->user()->can('home_work_update'))

                                <button type="button" data-bs-toggle="modal"
                                data-bs-target=".bs-example-modal-lg44t{{ $all_home_work->id }}"
                                class="btn btn-warning waves-light waves-effect  btn-sm">
                                <i class="uil-file-download"></i></button>

                            <div class="modal fade bs-example-modal-lg44t{{ $all_home_work->id }}" tabindex="-1"
                                role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Homework Assignments</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                        </div>

                                    </div>
                                </div>
                            </div>


                            <button type="button" data-bs-toggle="modal"
                            data-bs-target=".bs-example-modal-lg44tt{{ $all_home_work->id }}"
                            class="btn btn-success waves-light waves-effect  btn-sm">
                            <i class="uil-align-justify"></i></button>

                        <div class="modal fade bs-example-modal-lg44tt{{ $all_home_work->id }}" tabindex="-1"
                            role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Evaluate Homework</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close">
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                      <div class="row">
                                        <div class="col-8" >
                                            <h5>Student List</h5>
                                            <div style="overflow:scroll; height:400px;">
                                            <ul multiple="" class="list-group" id="slist" style="">

                                            <?php


                                            $all_student = DB::table('main_students')
                                            ->where('class',$class_name )
                                            ->where('section',$section_name)
                                            ->get();


                                            ?>

                                             @foreach($all_student as $ass_studemt)
                                                <li class="list-group-item ">
                                                    <div class="checkbox">
                                                        <label><input type="checkBox" name="student_list[1]" value="0">
                                                            {{ $ass_studemt->first_name.''.$ass_studemt->last_name }}({{ $ass_studemt->admission_no }})                                            </label>
                                                    </div>


                                                </li>
                                                @endforeach

                                        </ul>
                                    </div>
                                    <div class="row mt-2">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-5 col-xs-4">
                                                    <div class="form-group">
                                                        <label class="pt5">Evaluation Date</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-4 col-xs-4">
                                                    <div class="form-group">

                                            <input type="date"  name="evaluation_date" class="form-control form-control-sm " value="<?php echo date('Y-m-d')?>" >
                                                        <input type="hidden" name="homework_id" value="69">

                                                        <span class="text-danger" id="date_error"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 col-sm-3 col-xs-4 pull-right" style="margin-right: -8px;">

                                                        <div class="form-group">
                                                            <input type="submit" name="" class="btn btn-secondary btn-sm" value="Save">
                                                        </div>
                                                                            </div>
                                            </div>
                                        </div>

                                    </div>
                                        </div>
                                        <div class="col-4" style="background: #f4f4f4;">
                                            <p>Description:{{ $all_home_work->des  }}
                                                <p>
                                        </div>
                                      </div>



                                    </div>

                                </div>
                            </div>
                        </div>



                                <button type="button" data-bs-toggle="modal"
                                    data-bs-target=".bs-example-modal-lg{{ $all_home_work->id }}"
                                    class="btn btn-primary waves-light waves-effect  btn-sm">
                                    <i class="fas fa-pencil-alt"></i></button>

                                <div class="modal fade bs-example-modal-lg{{ $all_home_work->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update HW/CW
                                                    Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('admin.home_work.update') }}" method="POST"
                                                    enctype="multipart/form-data">

                                                    @csrf

                                                    <div class="row">

                                                        <div class="form-group col-md-12 col-sm-12">
                                                            <label for="password">Type</label>
                                                            <select name="status" class="form-control">
                                                                <option value="">Select Type</option>

                                                                <option value="HW"  {{ $all_home_work->status == 'HW'  ? 'selected' : '' }}>HW</option>
                                                                <option value="CW" {{ $all_home_work->status == 'CW'  ? 'selected' : '' }}>CW</option>

                                                            </select>
                                                        </div>



                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="password">Class Name</label>
                                                            <select name="class_id" class="form-control">
                                                                <option value="">Select Class</option>
                                                                @foreach ($class_details as $user_class_update)
                                                                <option value="{{ $user_class_update->id }}"
                                                                    {{ $all_home_work->class == $user_class_update->id  ? 'selected' : '' }}>
                                                                    {{ $user_class_update->name }}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="password">Department Name</label>
                                                            <select name="department_id" class="form-control">
                                                                <option readonly value="0">--- Select Department ---
                                                                </option>
                                                                @foreach ($dp_details as $user_class_update)
                                                                <option value="{{ $user_class_update->id }}"
                                                                    {{ $all_home_work->department == $user_class_update->id  ? 'selected' : '' }}>
                                                                    {{ $user_class_update->name }}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="password">Section Name</label>
                                                            <select name="section_id" class="form-control">
                                                                @foreach ($section_details as $user_class_update)
                                                                <option value="{{ $user_class_update->id }}"
                                                                    {{ $all_home_work->section == $user_class_update->id  ? 'selected' : '' }}>
                                                                    {{ $user_class_update->name }}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label for="password">Subject Name</label>
                                                            <select name="subject_id" class="form-control">
                                                                @foreach ($subject_details as $user_class_update)
                                                                <option value="{{ $user_class_update->id }}"
                                                                    {{ $all_home_work->subject == $user_class_update->id  ? 'selected' : '' }}>
                                                                    {{ $user_class_update->name }}</option>

                                                                @endforeach
                                                            </select>
                                                        </div>


                                                        <div class="row">
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">HW/CW Date</label>
                                                                <input type="date" class="form-control"
                                                                    name="homework_date" value="{{ $all_home_work->homework_date  }}"
                                                                    placeholder="Enter HW/CW Date">

                                                                    <input type="hidden" class="form-control"
                                                                    name="id" value="{{ $all_home_work->id  }}"
                                                                    placeholder="Enter HW/CW Date">
                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Submission Date</label>
                                                                <input type="date" class="form-control" id="name"
                                                                    name="submission_date" value="{{ $all_home_work->submission_date  }}"
                                                                    placeholder="Enter Submission Date">
                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Attached Doc</label>
                                                                <input type="file" class="form-control" id="name"
                                                                    name="doc" placeholder="Enter Practical Mark">
                                                            </div>



                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Description</label>
                                                                <textarea class="form-control form-control-sm" id="name"
                                                                    name="des" placeholder="">{{ $all_home_work->des  }}</textarea>
                                                            </div>



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
                                @if (Auth::guard('admin')->user()->can('home_work_delete'))

                                <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                                    onclick="deleteTag({{ $all_home_work->id}})" data-toggle="tooltip" title="Delete"><i
                                        class="fas fa-trash-alt"></i></button>
                                <form id="delete-form-{{ $all_home_work->id }}"
                                    action="{{ route('admin.home_work.delete',$all_home_work->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add New HW/CW</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.home_work.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">


                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="password">Type</label>
                                            <select name="status" class="form-control">
                                                <option value="">Select Type</option>

                                                <option value="HW">HW</option>
                                                <option value="CW">CW</option>

                                            </select>
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Class Name</label>
                                            <select name="class_id" class="form-control">
                                                <option value="">Select Class</option>
                                                @foreach ($class_details as $user_class_update)
                                                <option value="{{ $user_class_update->id }}">
                                                    {{ $user_class_update->name }}</option>

                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Department Name</label>
                                            <select name="department_id" class="form-control">

                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Section Name</label>
                                            <select name="section_id" class="form-control">

                                            </select>
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Subject Name</label>
                                            <select name="subject_id" class="form-control">

                                            </select>
                                        </div>


                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="name">HW/CW Date</label>
                                            <input type="date" class="form-control" name="homework_date"
                                                placeholder="Enter HW/CW Date">
                                        </div>


                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="name">Submission Date</label>
                                            <input type="date" class="form-control" id="name" name="submission_date"
                                                placeholder="Enter Submission Date">
                                        </div>

                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="name">Attached Doc</label>
                                            <input type="file" class="form-control" id="name" name="doc"
                                                placeholder="Enter Practical Mark">
                                        </div>



                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Description</label>
                                            <textarea class="form-control form-control-sm" id="name" name="des"
                                                placeholder=""></textarea>
                                        </div>



                                    </div>






                                </div>

                            </div>
                        </div>



                        <div class="col-lg-12">
                            <div class="float-right d-none d-md-block">
                                <div class="form-group mb-4">
                                    <div>
                                        <button type="submit"
                                            class="btn btn-primary btn-lg  waves-effect waves-light mr-1">
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
@endsection

@section('script')





<script type="text/javascript">
    $("select[name='class_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('department_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='department_id'").html('');
                $("select[name='department_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='class_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('section_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='section_id'").html('');
                $("select[name='section_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='department_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('dpsection_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='section_id'").html('');
                $("select[name='section_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='class_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('subject_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='subject_id'").html('');
                $("select[name='subject_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='department_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('subject_search_dpwise') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='subject_id'").html('');
                $("select[name='subject_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='section_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('student_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='students_id'").html('');
                $("select[name='students_id'").html(data.options);
            }
        });
    });

</script>




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
