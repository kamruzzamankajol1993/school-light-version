@extends('admin.master.master')

@section('title')
Lesson Plan List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Lesson Plan Information</h4>

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

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->
                    <div class="container-fluid">
                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @include('flash_message')

                                        <div class="row align-items-center">
                <!--filter code -->

                <div class="form-group col-md-10 col-sm-12">
                    <label>Teacher</label>

                                                                    <select name="teacher_id"  class="form-control form-control-sm">
                                                                        <option value="">-----Select Teacher-----</option>
                                                       @foreach ($teacher_lists as $user_class_update)
                    <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                                        @endforeach
                                                                                </select>
                                                                            </div>









                <div class="col-sm-2">
                    <label>Action</label>
                    <div class="float-right d-md-block">
                        <div class="dropdown">

<button class="btn btn-primary waves-effect  btn-sm waves-light"  id="routine_search_button_teacher_wise">
                                <i class="fas fa-search"></i>
                            </button>

                        </div>
                    </div>

                </div>

                                                                            <div class="col-sm-6">


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

                    </div>





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

$(document).ready(function(){
   $("#routine_search_button_teacher_wise").click(function(){

      var teacher_id = $("select[name='teacher_id'").val();



      $.ajax({
   headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  },
  url:"{{route('class_routine_search_teacherwise')}}",
  type:"POST",
  data:{'teacher_id':teacher_id},
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







