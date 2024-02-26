@extends('admin.master.master')

@section('title')
Generate Staff Id Card | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Generate Staff Id Card</h4>

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
                @if (Auth::guard('admin')->user()->can('generate_staff_id_view'))

                <form action="{{ route('print_view_all_or_single_admin_staff_id_card') }}" method="post">
                    @csrf
                <div class="row">

                    <div class="form-group col-md-3 col-sm-12">
                        <label for="password">Department</label>
                        <select name="dp_id" class="form-control form-control-sm">
                            <option value="">---->Select Department<----</option>
                                    @foreach($staff_department as $all_session) <option
                                    value="{{ $all_session->name }}">
                                    {{ $all_session->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group col-md-3 col-sm-12">
                        <label for="password">Designation</label>
                        <select name="desi_id" class="form-control form-control-sm">
                            <option value="">---->Select Designation<----</option>
                                    @foreach($staff_designa as $all_session) <option
                                    value="{{ $all_session->name }}">
                                    {{ $all_session->name }}</option>
                            @endforeach
                        </select>
                    </div>






                             <div class="form-group col-md-3 col-sm-12">
                                <label for="password">Staff Name</label>
                        <select name="staff_id"  class="form-control form-control-sm">

                                    </select>
                                </div>

                                <div class="form-group col-md-3 col-sm-12">
                                    <label for="password">Template Name</label>
                            <select name="template_id"  class="form-control form-control-sm" required>
                                <option value="">---->Select Template<----</option>
                                @foreach($staff_card_id as $all_session) <option
                                value="{{ $all_session->id }}">
                                {{ $all_session->signature }}</option>
                        @endforeach
                                        </select>
                                    </div>
                </div>
                <button type="submit"
                class="btn btn-sm btn-primary mt-4 pr-4 pl-4" id="schedule_exam_search">Search</button>
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
      url:"{{route('print_view_all_or_single_admin_staff_id_card')}}",
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

$("select[name='desi_id']").change(function(){
        var id_country = $(this).val();
        var dp_id = $("select[name='dp_id'").val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('staff_id_card_post') }}",
            method: 'POST',
            data: {id_country:id_country,dp_id:dp_id, _token:token},
            success: function(data) {
              $("select[name='staff_id'").html('');
              $("select[name='staff_id'").html(data.options);
            }
        });
    });



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
            url: "{{ route('exam_id_template_id_staff_id_card') }}",
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
