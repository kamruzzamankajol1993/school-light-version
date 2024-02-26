@extends('admin.master.master')

@section('title')
Result List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Result Information</h4>

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
                                @if (Auth::guard('admin')->user()->can('result_create'))
<a  href="{{ route('admin.result.create') }}" class="btn btn-primary waves-effect waves-light" type="button">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add New Result
                                    </a>
@endif
                                </div>
                            </div>
                        </div>
                        </div>
                        <form method="get" action="{{ route('result_search') }}">
                        <div class="row align-items-center mt-2">
<!--filter code -->

<div class="form-group col-md-2 col-sm-12">

                                                    <select name="class_id"  class="form-control">
                                                        <option value="">--Select Class--</option>
                                       @foreach ($class_details as $user_class_update)
    <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>


                <div class="form-group col-md-2 col-sm-12">

                                                    <select name="department_id"  class="form-control">


                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-2 col-sm-12">

                                                    <select name="section_id"  class="form-control">

                                                                </select>
                                                            </div>

                                                             <div class="form-group col-md-2 col-sm-12">

                                                    <select name="subject_id"  class="form-control">

                                                                </select>
                                                            </div>

                                                         <div class="form-group col-md-2 col-sm-12">

                                                    <select name="students_id"  class="form-control">

                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-2 col-sm-12">

                                                    <select name="exam_id"  class="form-control">
                                                        <option>---  Select Exam---</option>
                                                @foreach($exam_details as $exam_details)
    <option value="{{ $exam_details->id }}">{{ $exam_details->exam_name }}({{ $exam_details->year }})</option>
                                                             @endforeach
                                                                </select>
                                                            </div>
<div class="col-sm-11">
</div>

                                                            <div class="col-sm-1 mt-1">
                            <div class="float-right d-md-block">
                                <div class="dropdown">
                                @if (Auth::guard('admin')->user()->can('result_create'))
<button class="btn btn-primary waves-effect waves-light" type="submit">
                                        <i class="far fa-calendar-plus  mr-2"></i> Search
                                    </button>
@endif
                                </div>
                            </div>
                        </div>

                  <!--filter code -->
                    </div>
                    <!-- end page title -->
</form>
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
                                     <th>Class </th>
                                     <th>Section </th>
                                    <th>Roll No</th>
                                    <th>Subject</th>
                                    <th>MCQ</th>
                                    <th>Written</th>
                                    <th>Practical</th>
                                     <th>Total Mark</th>
                                    <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($result_details as $user)


                                <tr>
                                   <td>{{ $loop->index+1 }}</td>

                                <td>
                                    @foreach ($class_details as $user_class)

                                    @if($user->sreni_id == $user_class->id)


                                    {{ $user_class->name }}

                                        @endif
                                    @endforeach

                                </td>

                                 <td>
                                    @foreach ($section_details as $dp_class)

                                    @if($user->section_id == $dp_class->id)


                                    {{ $dp_class->name }}

                                        @endif
                                    @endforeach

                                </td>
                                   <td>




  {{ $user->roll }}



                                    </td>

                                    <td>




  @foreach ($subject_details as $dp_class)

                                    @if($user->subject_id == $dp_class->id)


                                    {{ $dp_class->name }}

                                        @endif
                                    @endforeach



                                    </td>
                                    <td>{{ $user->mcq_exam }}</td>
                                     <td>{{ $user->written_exam }}</td>

                                   <td>{{ $user->prac_exam }}</td>
                                      <td>{{ $user->main_total }}</td>
                                    <td>
                                      @if (Auth::guard('admin')->user()->can('result_edit'))

                    <a type="button" href="{{ route('admin.result.edit',$user->id) }}"  class="btn btn-primary waves-light waves-effect" >
                                          <i class="fas fa-pencil-alt"></i></a>




@endif





                                  @if (Auth::guard('admin')->user()->can('result_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.result.delete',$user->id) }}" method="POST" style="display: none;">
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
            <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title mt-0" id="myLargeModalLabel">Add New Student</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <div class="modal-body">
                            <form class="custom-validation" action="{{ route('admin.student.store') }}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
<div class="row">
<div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                    <select name="class_id"  class="form-control">
                                                        <option value="">Select Class</option>
                                       @foreach ($class_details as $user_class_update)
                                 <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>


                <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Department Name</label>
                                                    <select name="department_id"  class="form-control">

                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Section Name</label>
                                                    <select name="section_id"  class="form-control">

                                                                </select>
                                                            </div>
                                                        </div>
                                                <div class="row">
                            <div class="form-group col-md-3 col-sm-12">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="student_name" placeholder="Enter Name">
                            </div>


                            <div class="form-group col-md-3 col-sm-12">
                                <label for="name">Phone</label>
                                <input type="text" class="form-control" id="name" name="student_phone" placeholder="Enter Phone">
                            </div>

                             <div class="form-group col-md-3 col-sm-12">
                                <label for="name">Email</label>
                                <input type="email" class="form-control" id="name" name="student_email" placeholder="Enter Email">
                            </div>

                            <div class="form-group col-md-3 col-sm-12">
                                <label for="name">Address</label>
                                <input type="text" class="form-control" id="name" name="student_address" placeholder="Enter Address">
                                <input type="hidden" class="form-control" id="name" name="year" placeholder="Enter Address" value="<?php echo date('Y')?>">
                                <input type="hidden" class="form-control" id="name" name="month" placeholder="Enter Address" value="<?php echo date('m')?>">
                            </div>

                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Date of Birth</label>
                                <input type="date" class="form-control" id="name" name="student_dob" placeholder="Enter Address">
                            </div>

                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Student Image</label>
                                <input type="file" class="form-control" id="name" name="student_image" placeholder="Enter Address">
                            </div>



                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Gender</label>
                                <select name="gender"  class="form-control">

                                                <option value="Male" >Male</option>
                                             <option value="Female">Female</option>

                                                                </select>
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Father Name</label>
                                <input type="text" class="form-control" id="name" name="father_name" placeholder="Enter Father Name">
                            </div>


                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Mother Name</label>
                                <input type="text" class="form-control" id="name" name="moher_name" placeholder="Enter Mother name">
                            </div>

                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Status</label>
                                                    <select name="status"  class="form-control">

                                                <option value="1" >Active</option>
                                             <option value="0">InActive</option>

                                                                </select>
                                                            </div>

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
  $("select[name='class_id']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ route('subject_search') }}",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='subject_id'").html('');
            $("select[name='subject_id'").html(data.options);
          }
      });
  });
</script>
<script type="text/javascript">
  $("select[name='department_id']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ route('subject_search_dpwise') }}",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='subject_id'").html('');
            $("select[name='subject_id'").html(data.options);
          }
      });
  });
</script>
<script type="text/javascript">
  $("select[name='section_id']").change(function(){
      var id_country = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
          url: "{{ route('student_search') }}",
          method: 'POST',
          data: {id_country:id_country, _token:token},
          success: function(data) {
            $("select[name='students_id'").html('');
            $("select[name='students_id'").html(data.options);
          }
      });
  });
</script>
@endsection







