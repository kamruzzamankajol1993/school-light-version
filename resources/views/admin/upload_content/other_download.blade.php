@extends('admin.master.master')

@section('title')
Upload Content Information | {{ $ins_name }}
@endsection


@section('css')
<style>
    .disabled_input {
        background-color: grey;
        padding-bottom: 10px;
        /* color : #C0C0C0;
    opacity : 0.1; */
    }

</style>
@endsection

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0"> Upload Content List</h4>

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
                                <th>Content Title</th>
                                <th>Content Type</th>
                                <th>Date</th>
                                <th>Available For</th>
                                <th>Class</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($upload_content_detail as $all_home_work)
                        <tr>
                        <td>{{ $loop->index+1 }}</td>


                        <td>
                            {{ $all_home_work->title }}
                        </td>

                        <td>
                            {{ $all_home_work->content_type }}
                        </td>

                        <td>
                            {{ date('d/m/Y', strtotime($all_home_work->upload_date)) }}
                        </td>


                        <td>
                            {{ $all_home_work->assaign_section }}
                        </td>




                        <td>
                            <?php $class_name = DB::table('sranis')->where('id',$all_home_work->class)->value('name'); ?>
                            <?php $section_name = DB::table('sections')->where('id',$all_home_work->section)->value('name'); ?>

                            {{ $class_name }}({{ $section_name }})
                        </td>
                        <td>
                            @if (Auth::guard('admin')->user()->can('upload_content_delete'))

                            <a href="{{ route('upload_conten_down_load',$all_home_work->id) }}" type="button" class="btn btn-success waves-light waves-effect  btn-sm"
                                ><i
                                    class="uil-file-download"></i></a>

                            @endif
                            @if (Auth::guard('admin')->user()->can('upload_content_delete'))

                            <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                                onclick="deleteTag({{ $all_home_work->id}})" data-toggle="tooltip" title="Delete"><i
                                    class="fas fa-trash-alt"></i></button>
                            <form id="delete-form-{{ $all_home_work->id }}"
                                action="{{ route('admin.upload_content.delete',$all_home_work->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add New Content</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.upload_content.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Content Title</label>
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Enter Content Title">
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Content Type</label>
                                            <select name="content_type" class="form-control">
                                                <option value="">---->Select Content Type<----</option> <option
                                                        value="Assignments">
                                                        Assignments</option>
                                                <option value="Study Material">
                                                    Study Material</option>

                                                <option value="Syllabus">
                                                    Syllabus</option>

                                                <option value="Other Download">
                                                    Other Download</option>

                                            </select>
                                        </div>

                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="password">Available For</label>
                                            <div class="form-check">
                                                <input class="form-check-input" name="assaign_section[]" type="checkbox"
                                                    value="All Super Admin" id="assaign_section">
                                                <label class="form-check-label" for="assaign_section">
                                                    All Super Admin
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" name="assaign_section[]" type="checkbox"
                                                    value="All Student" id="assaign_section">
                                                <label class="form-check-label" for="assaign_section">
                                                    All Student
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" name="assaign_section[]" type="checkbox"
                                                    value="Available For All Classes" id="assaign_section">
                                                <label class="form-check-label" for="assaign_section">
                                                    Available For All Classes
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3" class="disabled" id="disabled">

                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="password">Class Name</label>
                                            <select name="class_id" class="form-control">
                                                <option value="">Select Class</option>
                                                @foreach ($class_details as $user_class_update)
                                                <option value="{{ $user_class_update->id }}">
                                                    {{ $user_class_update->name }}</option>

                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="password">Department Name</label>
                                            <select name="department_id" class="form-control">

                                            </select>
                                        </div>

                                        <div class="form-group col-md-4 col-sm-12">
                                            <label for="password">Section Name</label>
                                            <select name="section_id" class="form-control">

                                            </select>
                                        </div>
                                    </div>




                                    <div class="row mt-3">


                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Upload Date</label>
                                            <input type="date" value="<?php echo date('Y-m-d')?>" class="form-control"
                                                id="name" name="upload_date" placeholder="Enter Upload Date">
                                        </div>


                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Content File</label>
                                            <input type="file" class="form-control" id="name" required name="doc"
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
    $(document).on('click', '#assaign_section', function () {
        var target = $(this).val();
        // alert(target);

        if (target == 'All Super Admin') {
            $('#disabled').addClass('disabled_input').css('pointerEvents', 'none');
        }



        if (target == 'Available For All Classes') {
            $('#disabled').addClass('disabled_input').css('pointerEvents', 'none');
        }



        if (target == 'All Student') {
            $('#disabled').removeClass('disabled_input').css('pointerEvents', 'auto');;
        }
    });

</script>

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
