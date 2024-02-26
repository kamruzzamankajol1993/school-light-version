@extends('admin.master.master')

@section('title')
Class Routine List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Class Routine Information</h4>

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
                                @if (Auth::guard('admin')->user()->can('clr_add'))
<button   class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add New Class Routine
</button>
@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @include('flash_message')

                                        <div class="row align-items-center">
                <!--filter code -->

                <div class="form-group col-md-4 col-sm-12">
                    <label>Class</label>

                                                                    <select name="class_id"  class="form-control form-control-sm">
                                                                        <option value="">-----Select Class-----</option>
                                                       @foreach ($class_details as $user_class_update)
                    <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                                        @endforeach
                                                                                </select>
                                                                            </div>


                                <div class="form-group col-md-4 col-sm-12">
                                    <label>Department</label>
                                                                    <select name="department_id"  class="form-control form-control-sm">


                                                                                </select>
                                                                            </div>

                                                                            <div class="form-group col-md-4 col-sm-12">
                                                                                <label>Section</label>
                                                                    <select name="section_id"  class="form-control form-control-sm">

                                                                                </select>
                                                                            </div>




                <div class="col-sm-6 mt-2">

                    <div class="float-right d-md-block">
                        <div class="dropdown">

<button class="btn btn-warning waves-effect  btn-sm waves-light"  id="routine_del_up_button">
                                <i class="fas fa-trash-alt"></i>/<i class="fas fa-pencil-alt"></i>
                            </button>

                        </div>
                    </div>

                </div>

                                                                            <div class="col-sm-6 mt-2">

                                                                                <div class="row">

                                                                                    <div class="col-sm-10">

                                                                                    </div>
                                                                                    <div class="col-sm-2">
                                                                                        <div class="float-right d-md-block">
                                                                                            <div class="dropdown">

                                                            <button class="btn btn-success waves-effect  btn-sm waves-light"  id="routine_search_button">
                                                                                                    <i class="fas fa-search"></i>
                                                                                                </button>

                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                        </div>

                                  <!--filter code -->
                                    </div>
                                    <!-- end page title -->


                <div id="show_result">



                </div>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->






<!--  Modal content for the above example -->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add New Class Routine</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('admin.class_routine.store') }}">
                    @csrf
                    <div class="row align-items-center">
<!--filter code -->

<div class="form-group col-md-4 col-sm-12">
<label>Class</label>

                                                <select name="class_id"  class="form-control form-control-sm">
                                                    <option value="">-----Select Class-----</option>
                                   @foreach ($class_details as $user_class_update)
<option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                    @endforeach
                                                            </select>
                                                        </div>


            <div class="form-group col-md-4 col-sm-12">
                <label>Department</label>
                                                <select name="department_id"  class="form-control form-control-sm">


                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-4 col-sm-12">
                                                            <label>Section</label>
                                                <select name="section_id"  class="form-control form-control-sm">

                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label>Class Room</label>
                                                <select name="room"  class="form-control form-control-sm">
                                                    <option value="">-----Select Room-----</option>
                                                    @foreach ($class_room_details as $user_class_update)
                                                    <option value="{{ $user_class_update->room_no }}" >{{ $user_class_update->room_no }}</option>

                                                                                        @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6 col-sm-12">
                                                            <label>Day</label>
                                                <select name="day"  class="form-control form-control-sm">
                                                    <option value="">-----Select Day-----</option>

                                                    <option value="Saturday" >Saturday</option>
                                                    <option value="Sunday" >Sunday</option>
                                                    <option value="Monday" >Monday</option>
                                                    <option value="Tuesday" >Tuesday</option>
                                                    <option value="Wednesday " >Wednesday</option>
                                                    <option value="ThursDay" >ThursDay</option>
                                                    <option value="Same class all week" >Same class all week</option>



                                                            </select>
                                                        </div>


                                                        <div class="form-group col-md-12 col-sm-12">
                                                            <table class="table table-bordered" id="dynamicAddRemove">
                                                                <tr>

                                                                    <th>Schedule</th>
                                                                    <th>Subject</th>
                                                                    <th>Teacher</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                <tr>
                                                                    <td>



                                                                        <select name="class_shedule[]" id="class_shedule0"  class="form-control form-control-sm">
                                                                            <option value="">-----Select Schedule-----</option>
                                                           @foreach ($class_schedule_details as $user_class_update)
                        <option value="{{ $user_class_update->name }}" >{{ $user_class_update->name }}</option>

                                                            @endforeach
                                                                                    </select>
                                                                    </td>

                                                                    <td>



                                                                        <select name="subject[]" id="subject0"  class="form-control form-control-sm">
                                                                            <option value="">-----Select Subject-----</option>
                                                           @foreach ($uniq_subject_details as $user_class_update)
                        <option value="{{ $user_class_update->name }}" >{{ $user_class_update->name }}</option>

                                                            @endforeach
                                                            <option value="Break" >Break</option>
                                                                                    </select>
                                                                    </td>
                                                                    <td>



                                                                        <select name="teacher[]" id="teacher0"  class="form-control form-control-sm">
                                                                            <option value="">-----Select Teachers-----</option>
                                                           @foreach ($teacher_details as $user_class_update)
                        <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                                            @endforeach
                                                            <option value="0" >Class Teacher</option>
                                                                                    </select>
                                                                    </td>
                                                                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add More</button></td>
                                                                </tr>
                                                            </table>

                                                        </div>


<div class="col-sm-6">
</div>

                                                        <div class="col-sm-6">
                        <div class="float-right d-md-block">
                            <div class="dropdown">

<button class="btn btn-primary waves-effect  btn-sm waves-light" type="submit">
                                    <i class="far fa-calendar-plus  mr-2"></i> Submit
                                </button>

                            </div>
                        </div>
                    </div>

              <!--filter code -->
                </div>
                <!-- end page title -->
</form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('script')

<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><select name="class_shedule[]" id="class_shedule'+i+'"  class="form-control form-control-sm"><option value="">-----Select Schedule-----</option>@foreach ($class_schedule_details as $user_class_update)<option value="{{ $user_class_update->name }}" >{{ $user_class_update->name }}</option>@endforeach</select></td><td><select name="subject[]" id="subject'+i+'"  class="form-control form-control-sm"><option value="">-----Select Subject-----</option>@foreach ($uniq_subject_details as $user_class_update)<option value="{{ $user_class_update->name }}" >{{ $user_class_update->name }}</option>@endforeach <option value="Break" >Break</option></select></td><td><select name="teacher[]" id="teacher'+i+'"  class="form-control form-control-sm"><option value="">-----Select Teacher-----</option>@foreach ($teacher_details as $user_class_update)<option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>@endforeach<option value="0" >Class Teacher</option></select></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
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

$(document).ready(function(){
   $("#routine_search_button").click(function(){

      var class_id = $("select[name='class_id'").val();
      var section_id = $("select[name='section_id'").val();
      var department_id = $("select[name='department_id'").val();


      $.ajax({
   headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  url:"{{route('class_routine_search_sectionwise')}}",
  type:"POST",
  data:{'class_id':class_id,'section_id':section_id,'department_id':department_id},
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

    $(document).ready(function(){
       $("#routine_del_up_button").click(function(){

          var class_id = $("select[name='class_id'").val();
          var section_id = $("select[name='section_id'").val();
          var department_id = $("select[name='department_id'").val();
          $('#show_result').html('');

          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('class_routine_del_up')}}",
      type:"POST",
      data:{'class_id':class_id,'section_id':section_id,'department_id':department_id},
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
@endsection







