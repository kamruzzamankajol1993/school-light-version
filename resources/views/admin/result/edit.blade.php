@extends('admin.master.master')

@section('title')
Update Result | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Update Result Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $ins_name }} </a></li> --}}
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
                </ol>
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
                                    <form class="custom-validation" action="{{ route('admin.result.update') }}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
<div class="row">
<div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                    <select name="class_id"  class="form-control">
                                                        <option value="">Select Class</option>
                                       @foreach ($class_details as $user_class_update)
    <option value="{{ $user_class_update->id }}" {{ $result_details->sreni_id == $user_class_update->id  ? 'selected' : '' }}>{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>


                <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Department Name</label>
                                                    <select name="department_id"  class="form-control">
                                                        <option readonly value="0">--- Select Department ---</option>
                                                                   @foreach ($dp_details as $user_class_update)
                     <option value="{{ $user_class_update->id }}" {{ $result_details->department_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Section Name</label>
                                                    <select name="section_id"  class="form-control">
                                                               @foreach ($section_details as $user_class_update)
                     <option value="{{ $user_class_update->id }}" {{ $result_details->section_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>

                                                             <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Subject Name</label>
                                                    <select name="subject_id"  class="form-control">
                                                                       @foreach ($subject_details as $user_class_update)
                     <option value="{{ $user_class_update->id }}" {{ $result_details->subject_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>

                                                         <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Student Name</label>
                                                    <select name="students_id"  class="form-control">
                                                              @foreach ($student_details as $user_class_update)
                     <option value="{{ $user_class_update->id }}" {{ $result_details->students_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->student_name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Exam Name</label>
                                                    <select name="exam_id"  class="form-control">
                                                        <option>--- Please Select ---</option>
                                                @foreach($exam_details as $exam_details)
    <option value="{{ $exam_details->id }}" {{ $result_details->exam_id == $exam_details->id  ? 'selected' : '' }}>{{ $exam_details->exam_name }}({{ $exam_details->year }})</option>
                                                             @endforeach
                                                                </select>
                                                            </div>
                                                            </div>
                                                <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Written Mark</label>
                                <input type="text" class="form-control" value="{{ $result_details->written_exam }}" name="written_exam" placeholder="Enter Written Mark">
                            </div>


                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">MCQ Mark</label>
                                <input type="text" class="form-control" value="{{ $result_details->mcq_exam }}" name="mcq_exam" placeholder="Enter MCQ Mark">

                             <input type="hidden" class="form-control" value="{{ $result_details->id }}" name="id" placeholder="Enter MCQ Mark">
                            </div>

                             <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Practical Mark</label>
                                <input type="text" class="form-control" value="{{ $result_details->prac_exam }}" name="prac_exam" placeholder="Enter Practical Mark">
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







