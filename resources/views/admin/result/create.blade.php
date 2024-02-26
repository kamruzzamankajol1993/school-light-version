@extends('admin.master.master')

@section('title')
Add Result | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<style>
    .hh{
        display: none;
}

.ss{
        display: shown;
}
</style>

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Add Result Information</h4>

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
                                    {{-- <form class="custom-validation" action="{{ route('admin.result.store') }}" method="post" enctype="multipart/form-data"> --}}
                              @csrf

                              <div class="alert alert-success alert-dismissible fade hh" id="ss"  role="alert">
                                <i class="uil uil-check me-2"></i>


                            </div>


                            <div class="alert alert-danger alert-dismissible fade hh" id="dd" style=""  role="alert">
                                <i class="uil uil-exclamation-octagon  me-2"></i>


                            </div>
<div class="row">

    <div class="form-group col-md-4 col-sm-12">
        <label for="password">Session</label>
        <select name="session_id" class="form-control form-control-sm">
            <option value="">---->Select Session<----</option>
                    @foreach($session_detail as $all_session) <option
                    value="{{ $all_session->name }}">
                    {{ $all_session->name }}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group col-md-4 col-sm-12">
        <label for="password">Exam Name</label>
        <select name="exam_id" class="form-control form-control-sm">
            <option value="">---->Select Exam<----</option>

        </select>
    </div>
<div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                    <select name="class_id"  class="form-control form-control-sm">
                                                        <option value="">Select Class</option>

                                                                </select>
                                                            </div>


                <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Department Name</label>
                                                    <select name="department_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Section Name</label>
                                                    <select name="section_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                             <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Subject Name</label>
                                                    <select name="subject_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                         <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Student Name</label>
                                                    <select name="students_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                            </div>
                                                <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Written Mark</label>
                                <input type="text" class="form-control form-control-sm"  name="written_exam" placeholder="Enter Written Mark">
                            </div>


                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">MCQ Mark</label>
                                <input type="text" class="form-control form-control-sm" id="name" name="mcq_exam" placeholder="Enter MCQ Mark">
                            </div>

                             <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Practical Mark</label>
                                <input type="email" class="form-control form-control-sm" id="name" name="prac_exam" placeholder="Enter Practical Mark">
                            </div>



                        </div>






                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="float-right d-none d-md-block">
                                            <div class="form-group mb-4">
                                                <div>
                                                    <button id="submit_button" class="btn btn-primary btn-sm  waves-effect waves-light mr-1">
                                                       Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            {{-- </form> --}}

                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->







@endsection

@section('script')


<script type="text/javascript">

    $(document).ready(function(){
       $("#submit_button").click(function(e){

          var class_id = $("select[name='class_id'").val();
          var exam_id = $("select[name='exam_id'").val();
          var session_id = $("select[name='session_id'").val();
          var department_id = $("select[name='department_id'").val();
          var section_id = $("select[name='section_id'").val();
          var subject_id = $("select[name='subject_id'").val();

          var students_id = $("select[name='students_id'").val();
          var written_exam = $("input[name=written_exam]").val();
          var mcq_exam = $("input[name=mcq_exam]").val();
          var prac_exam = $("input[name=prac_exam]").val();


          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('admin.result.store')}}",
      type:"POST",
      data:{
          'class_id':class_id,
          'session_id':session_id,
          'exam_id':exam_id,
          'department_id':department_id,
          'section_id':section_id,
          'subject_id':subject_id,
          'students_id':students_id,
          'written_exam':written_exam,
          'mcq_exam':mcq_exam,
          'prac_exam':prac_exam
        },
            //dataType:'json',
            success:function(response){

              if(response.success){
                  //alert(response.message) //Message come from controller

                  $('#ss').removeClass('hh');
                  $('#ss').addClass('show');

                  $("input[name=written_exam]").trigger("reset");
                  $("input[name=mcq_exam]").trigger("reset");
                  $("input[name=prac_exam]").trigger("reset");


                  $('#ss').html(response.message);

                  $("#ss").fadeOut(5000);

              }else{
                $('#dd').removeClass('hh');
                  $('#dd').addClass('show');
                  $('#dd').html("Error");

                  $("input[name=written_exam]").trigger("reset");
                  $("input[name=mcq_exam]").trigger("reset");
                  $("input[name=prac_exam]").trigger("reset");

                  $("#dd").fadeOut(5000);
              }
            },
            error:function(error){
              console.log(error)
           }
         });

      //end ajax


    });

    });
      </script>


<script type="text/javascript">
    $("select[name='session_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('exam_name_search') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='exam_id'").html('');
              $("select[name='exam_id'").html(data.options);
            }
        });
    });
  </script>

<script type="text/javascript">
    $("select[name='exam_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('search_class_from_exam') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='class_id'").html('');
              $("select[name='class_id'").html(data.options);
            }
        });
    });
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







