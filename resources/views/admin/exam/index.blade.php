@extends('admin.master.master')

@section('title')
Exam List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Exam Information</h4>

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
                @if (Auth::guard('admin')->user()->can('exam_create'))
                <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Exam
                </button>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row">
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

                                <th>Name</th>
                                <th>Start Date-End Date</th>
                                <th>Description</th>
                                <th>Session</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($exam_details as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>

                                <td>




                                    {{ $user->exam_name }}



                                </td>
                                <td>


                                    {{ date('d/m/Y', strtotime($user->start_date))}}-{{ date('d/m/Y', strtotime($user->end_date))}}

                                </td>

                                <td>

                                    {{ $user->des }}


                                </td>
                                <td>


                                    {{ $user->year }}

                                </td>

                                <td>

                                    @if (Auth::guard('admin')->user()->can('remark_add'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lgh34ec{{ $user->id }}"
                                        class="btn btn-warning waves-light waves-effect  btn-sm">
                                        <i class="uil-comment-add"></i></button>

                                    <div class="modal fade bs-example-modal-lgh34ec{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Teacher Remark</h5>
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                       , Exam: <b>{{ $user->exam_name }}</b>
                                                    </h5>
                                                    <h5 class="modal-title" id="exampleModalLabel" style="padding-left: 23px;">
                                                        From:{{ date('d/m/Y', strtotime($user->start_date))}}     To:{{ date('d/m/Y', strtotime($user->end_date))}}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <?php

                                                $check_class_list_assign = DB::table('assaign_class_to_exams')
                                                                ->where('exam_id',$user->id)->get();

                                                ?>
                                                <div class="modal-body">
                                                    <form action="{{ route('add_teacher_remark') }}" method="POST"
                                                        enctype="multipart/form-data">

                                                        @csrf

                                                        <input type="hidden" class="form-control" id="name"
                                                        name="exam_id" placeholder="Enter Name"
                                                        value="{{ $user->id }}">
                                                        <input type="hidden" class="form-control" id="name"
                                                        name="session_year" placeholder="Enter Name"
                                                        value="{{ $user->year }}">
                                                        <div class="row">
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                                <select name="class_id" data-index="{{ $user->id }}" class="form-control form-control-sm">
                                                                    <option value="">Select Class</option>
                                                                    @foreach ($check_class_list_assign as $user_class_update)
                                                                    <option value="{{ $user_class_update->class_id }}">

                                                                        <?php  $class_name =DB::table('sranis')->where('id',$user_class_update->class_id)->value('name')  ?>
                                                                        {{ $class_name }}



                                                                    </option>

                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Department Name</label>
                                                    <select name="department_id" data-index="{{ $user->id }}"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Section Name</label>
                                                    <select name="section_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>
                                                        </div>


                                                        <hr style="height: 4px;background-color:rgb(30, 159, 210);margin-top:15px;">

                                                        <div class="form-group col-md-12 col-sm-12 ss" id="result">


                                                        </div>


                                                        <button type="submit"
                                                            class="btn btn-sm btn-primary mt-4 pr-4 pl-4">Add</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    @endif

                                    @if (Auth::guard('admin')->user()->can('exam_schedule_add'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lgh34e{{ $user->id }}"
                                        class="btn btn-info waves-light waves-effect  btn-sm">
                                        <i class="uil-newspaper"></i></button>

                                    <div class="modal fade bs-example-modal-lgh34e{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">
                                                        <b>{{ $user->exam_name }}</b> Shedule :-
                                                    </h5>
                                                    <h5 class="modal-title" id="exampleModalLabel" style="padding-left: 23px;">
                                                        From:{{ date('d/m/Y', strtotime($user->start_date))}}     To:{{ date('d/m/Y', strtotime($user->end_date))}}
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <?php

                                                $check_class_list_assign = DB::table('assaign_class_to_exams')
                                                                ->where('exam_id',$user->id)->get();

                                                ?>
                                                <div class="modal-body">
                                                    <form action="{{ route('add_exam_schedule') }}" method="POST"
                                                        enctype="multipart/form-data">

                                                        @csrf
                                                        <input type="hidden" class="form-control" id="name"
                                                        name="exam_id" placeholder="Enter Name"
                                                        value="{{ $user->id }}">
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                                <select name="class_id" data-index="{{ $user->id }}" class="form-control form-control-sm">
                                                                    <option value="">Select Class</option>
                                                                    @foreach ($check_class_list_assign as $user_class_update)
                                                                    <option value="{{ $user_class_update->class_id }}">

                                                                        <?php  $class_name =DB::table('sranis')->where('id',$user_class_update->class_id)->value('name')  ?>
                                                                        {{ $class_name }}



                                                                    </option>

                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Department Name</label>
                                                    <select name="department_id" data-index="{{ $user->id }}"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>
<hr style="height: 4px;background-color:chocolate;margin-top:15px;">

<div class="form-group col-md-12 col-sm-12 rr" id="result">


</div>

                                                        </div>




                                                        <button type="submit" value="add" id="add"
                                                            class="btn btn-primary btn-sm mt-4 pr-4 pl-4">Add</button>


                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
@endif
                                    <!--add student -->
                                    @if (Auth::guard('admin')->user()->can('assign_class_add'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lgh34{{ $user->id }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm">
                                        <i class="uil-link-add"></i></button>

                                    <div class="modal fade bs-example-modal-lgh34{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Assign Class To
                                                        <b>{{ $user->exam_name }}</b></h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('assaign_class_to_exam') }}" method="POST"
                                                        enctype="multipart/form-data">

                                                        @csrf

                                                        <label for="password">Class List</label>
                                                        <hr>

                                                        <input type="hidden" class="form-control" id="name"
                                                            name="exam_id" placeholder="Enter Name"
                                                            value="{{ $user->id }}">

                                                        <?php

                                                        $check_exam_list = DB::table('assaign_class_to_exams')
                                                                        ->where('exam_id',$user->id)->get();



                                                        $first_select_class_id = $check_exam_list->implode("class_id", ", ");
                                                        $final_result_all = explode(', ', $first_select_class_id);



                                                        $uncheck_class_list = DB::table('sranis')->wherenotIn('id',$final_result_all)->get();


                                                        ?>
                                                        @foreach($check_exam_list as $all_class_check)
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="class_id[]"
                                                                id="inlineCheckbox{{ $all_class_check->id }}"
                                                                value="{{ $all_class_check->class_id }}" checked>
                                                            <label class="form-check-label"
                                                                for="inlineCheckbox{{ $all_class_check->id }}">

                                                                <?php  $class_name =DB::table('sranis')->where('id',$all_class_check->class_id)->value('name')  ?>
                                                                {{ $class_name }}


                                                            </label>
                                                        </div>


                                                        @endforeach
                                                        @foreach($uncheck_class_list as $all_class)
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="checkbox"
                                                                name="class_id[]"
                                                                id="inlineCheckbox{{ $all_class->id }}"
                                                                value="{{ $all_class->id }}">
                                                            <label class="form-check-label"
                                                                for="inlineCheckbox{{ $all_class->id }}">{{ $all_class->name }}</label>
                                                        </div>


                                                        @endforeach
                                                        <br>
                                                        <button type="submit"
                                                            class="btn btn-primary btn-sm mt-4 pr-4 pl-4">Assign</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
@endif
                                    <!--add student -->
                                    @if (Auth::guard('admin')->user()->can('exam_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Exam
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.exam.update') }}" method="POST"
                                                        enctype="multipart/form-data">

                                                        @csrf
                                                        <div class="row">
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Exam Name</label>
                                                                <input type="text" class="form-control" id="name"
                                                                    name="exam_name" placeholder="Enter Name"
                                                                    value="{{ $user->exam_name }}">

                                                                <input type="hidden" class="form-control" id="name"
                                                                    name="id" placeholder="Enter Name"
                                                                    value="{{ $user->id }}">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Start Date</label>
                                                                <input type="date" class="form-control" id="name"
                                                                    name="start_date" placeholder="Enter Phone"
                                                                    value="{{ $user->start_date }}">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">End Date</label>
                                                                <input type="date" class="form-control" id="name"
                                                                    name="end_date" placeholder="Enter Email"
                                                                    value="{{ $user->end_date }}">
                                                            </div>

                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Pass Out Session</label>
                                                                <select name="year" class="form-control">
                                                                    <option value="">---->Select Session<----</option>
                                                                            @foreach($session_detail as $all_session)
                                                                            <option value="{{ $all_session->name }}"
                                                                            {{ $user->year == $all_session->name ? 'selected':'' }}>
                                                                            {{ $all_session->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>


                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Description</label>
                                                                <textarea class="form-control form-control-sm" id="name"
                                                                    name="des">
                                                                {{ $user->des}}
                                                            </textarea>
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



                                    @if (Auth::guard('admin')->user()->can('exam_delete'))

                                    <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.exam.delete',$user->id) }}" method="POST"
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



</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->


<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add New Exam</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.exam.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <div class="row">
                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="name">Exam Name</label>
                                            <input type="text" class="form-control" id="name" name="exam_name"
                                                placeholder="Enter Name">


                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">Start Date</label>
                                            <input type="date" class="form-control" id="name" name="start_date"
                                                placeholder="Enter Phone">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="password">End Date</label>
                                            <input type="date" class="form-control" id="name" name="end_date"
                                                placeholder="Enter Email">
                                        </div>



                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="password">Pass Out Session</label>
                                            <select name="year" class="form-control">
                                                <option value="">---->Select Session<----</option>
                                                        @foreach($session_detail as $all_session) <option
                                                        value="{{ $all_session->name }}">
                                                        {{ $all_session->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>


                                        <div class="form-group col-md-12 col-sm-12">
                                            <label for="password">Description</label>
                                            <textarea class="form-control form-control-sm" id="name" name="des">

                                                            </textarea>
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
                                            class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
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
    $("select[name='class_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('department_search') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='department_id'").html('');
              $("select[name='department_id'").html(data.options);
            }
        });
    });
  </script>


<script type="text/javascript">
    $("select[name='class_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('section_search') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='section_id'").html('');
              $("select[name='section_id'").html(data.options);
            }
        });
    });
  </script>
  <script type="text/javascript">
    $("select[name='department_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('dpsection_search') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='section_id'").html('');
              $("select[name='section_id'").html(data.options);
            }
        });
    });
  </script>

<script type="text/javascript">
    $("select[name='section_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('student_search_examwise') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
                $(".ss").html('');
              $(".ss").html(data.options);
            }
        });
    });
  </script>

<script type="text/javascript">
    $("select[name='class_id']").change(function(){
        var id_country = $(this).val();
        var index = $(this).index();


        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('subject_search_for_exam') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $(".rr").html('');
              $(".rr").html(data.options);
            }
        });
    });
  </script>
  <script type="text/javascript">
    $("select[name='department_id']").change(function(){
        var id_country = $(this).val();
        var index = $(this).index();

        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('subject_search_dpwise_for_exam') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
                $(".rr").html('');
              $(".rr").html(data.options);
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
