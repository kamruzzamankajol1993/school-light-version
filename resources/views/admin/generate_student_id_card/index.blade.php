@extends('admin.master.master')

@section('title')
Generate Student Id Card | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Generate Student Id Card</h4>

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
    @include('flash_message')
    <div class="col-sm-12">
        <div class="float-right d-md-block">
            <div class="dropdown">
                @if (Auth::guard('admin')->user()->can('generate_student_id_view'))

              <form action="{{ route('print_view_all_or_single_admin_student_id_card') }}" method="post">
                  @csrf
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
                        <label for="password">Class Name</label>
                        <select name="class_id" class="form-control form-control-sm">
                            <option value="">---->Select Class<----</option>
                            @foreach ($class_details as $user_class_update)
<option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                             @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-4 col-sm-12">
                        <label for="password">Department Name</label>
            <select name="department_id"   class="form-control form-control-sm">

                        </select>
                    </div>

                    <div class="form-group col-md-4 col-sm-12">
                        <label for="password">Section Name</label>
                        <select name="section_id"  class="form-control form-control-sm">

                                    </select>
                                </div>



                             <div class="form-group col-md-4 col-sm-12">
                                <label for="password">Student Name</label>
                        <select name="students_id"  class="form-control form-control-sm">

                                    </select>
                                </div>

                                <div class="form-group col-md-4 col-sm-12">
                                    <label for="password">Template Name</label>
                            <select name="template_id"  class="form-control form-control-sm" required>
                                <option value="">---->Select Template<----</option>
                                @foreach ($student_card_id as $user_class_update)
    <option value="{{ $user_class_update->id }}" >{{ $user_class_update->signature }}</option>

                                 @endforeach
                                        </select>
                                    </div>
                </div>
                <button type="submit"
                class="btn btn-sm btn-primary mt-4 pr-4 pl-4" >Search</button>

            </form>

                @endif
            </div>
        </div>
    </div>
</div>
<!-- end page title -->



                <div id="show_result">

                </div>




</div> <!-- container-fluid -->
</div>
<!-- End Page-content -->



@endsection

@section('script')

<script type="text/javascript">

    $(document).ready(function(){
       $("#schedule_exam_search").click(function(){

          var class_id = $("select[name='class_id'").val();
          var exam_id = $("select[name='exam_id'").val();
          var session_id = $("select[name='session_id'").val();
          var department_id = $("select[name='department_id'").val();
          var section_id = $("select[name='section_id'").val();
          var students_id = $("select[name='students_id'").val();
          var template_id = $("select[name='template_id'").val();


          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('print_view_all_or_single_admin_student_id_card')}}",
      type:"POST",
      data:{'section_id':section_id,'students_id':students_id,'template_id':template_id,'class_id':class_id,'session_id':session_id,'exam_id':exam_id,'department_id':department_id},
            //dataType:'json',
            success:function(data){
              console.log(data);
            //  $("#subcategory_area").hide();
              $('#show_result').html(data);
            },
            error:function(){
            //  toastr.error("Something went Wrong, Please Try again.");
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


    $("select[name='exam_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('exam_id_template_id_student_id_card') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='template_id'").html('');
              $("select[name='template_id'").html(data.options);
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
