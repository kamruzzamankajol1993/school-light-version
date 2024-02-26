@extends('admin.master.master')

@section('title')
 Exam Information | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

 <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">Exam Information </h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Resnova</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Exam Information </a></li>

                                </ol>
                            </div>
                        </div>


                    </div>
                    <!-- end page title -->

                    <div class="row">
                        @include('flash_message')
                        @foreach($exam_details as $exam)
                        <div class="col-2">
                            <div class="card">
                                <div class="card-header">

                                   <a  href="{{ url('admin/student_wise_result/'.$id.'/'.$exam->id) }}" class="btn btn-primary waves-effect  btn-sm waves-light" type="button">
                                        <i class="fas fa-list"></i> {{ $exam->exam_name }}
                                    </a>

                                </div>
                            </div>
                        </div> <!-- end col -->
                        @endforeach
                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->



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







