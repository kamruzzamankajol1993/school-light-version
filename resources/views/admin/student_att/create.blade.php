@extends('admin.master.master')

@section('title')
Add Student Attendence  | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Add Student Attendence</h4>

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
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('flash_message')
                <form class="custom-validation" action="{{ route('admin.attendance_student.store') }}" method="post" enctype="multipart/form-data">
                    @csrf


                    <div class="row">
                        <div class="form-group col-md-4 col-sm-12">
                                                                                        <label for="password">Branch Name</label>
                                                                            <select name="class_id"  class="form-control form-control-sm">
                                                                                <option value="">Select Branch</option>
                                                               @foreach ($class_details as $user_class_update)
                                                         <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                                                @endforeach
                                                                                        </select>
                                                                                    </div>




                                                                                     <div class="form-group col-md-4 col-sm-12">
                                                                                        <label for="password">Subject Name</label>
                                                                            <select name="subject_id"  class="form-control form-control-sm">

                                                                                        </select>
                                                                                    </div>

                                                                                    <div class="form-group col-md-4 col-sm-12">
                                                                                        <label for="password">Date</label>
                                                                                        <input type="date" name="date" value="<?php echo date('Y-m-d')?>" class="form-control form-control-sm"/>
                                                                                      </div>
                                                                                    <div class="form-group col-md-12 col-sm-12" id="student_list">


                                                                                    </div>





                                                                                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



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
  $("select[name='class_id']").change(function(){
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


<script type="text/javascript">

    $(document).ready(function(){
       $("select[name='class_id'").change(function(){

          var class_id = $("select[name='class_id'").val();
          var section_id = $(this).val();
          var department_id = $("select[name='department_id'").val();

//alert(class_id + section_id + department_id)
          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('section_wise_student_view')}}",
      type:"POST",
      data:{'class_id':class_id,'section_id':section_id,'department_id':department_id},
            //dataType:'json',
            success:function(data){
              console.log(data);
            //  $("#subcategory_area").hide();
              $('#student_list').html(data);
            },
            error:function(){
            //  toastr.error("Something went Wrong, Please Try again.");
           }
         });

      //end ajax


    });

    });
      </script>
@endsection







