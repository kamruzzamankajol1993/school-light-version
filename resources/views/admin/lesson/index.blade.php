@extends('admin.master.master')

@section('title')
Lesson List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Topic Information</h4>

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
                                @if (Auth::guard('admin')->user()->can('les_create'))
<button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add New Lesson
                                    </button>
@endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end page title -->

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
                                    <th>Department</th>
                                    <th>Section </th>
                                    <th>Subject</th>
                                    <th>Lesson</th>
                                   <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($lesson_details as $key=>$user)

                                          <tr>
                                              <td>{{ $key+1 }}</td>
                                              <td>
                                                @foreach ($class_details as $user_class)

                                                @if($user->sreni_id == $user_class->id)


                                                {{ $user_class->name }}

                                                    @endif
                                                @endforeach

                                            </td>

                                             <td>
                                                @foreach ($dp_details as $dp_class)

                                                @if($user->department_id == $dp_class->id)


                                                {{ $dp_class->name }}

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




                                                @foreach ($subject_details as $dp_class)

                                                                                  @if($user->subject_id == $dp_class->id)


                                                                                  {{ $dp_class->name }}

                                                                                      @endif
                                                                                  @endforeach



                                                                                  </td>
                                                                                  <td>
                                                                                      <?php

                                                $lesson_list =   DB::table('lesson_lists')
                                                ->where('lesson_table_id',$user->id)
                                                ->get();
                                                                                        ?>


@foreach($lesson_list as $lesson_list_new)

<li>{{ $lesson_list_new->lesson_name }}</li>
@endforeach
                                                                                  </td>
                                                                                  <td>

                                                                                    @if (Auth::guard('admin')->user()->can('les_update'))
                                                                                    <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                                                                    class="btn btn-primary waves-light waves-effect  btn-sm" >
                                                                                    <i class="fas fa-pencil-alt"></i></button>

                                                                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                                                        <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Lesson Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                    </button>
                                                  </div>
                                                                                          <div class="modal-body">
                                                                                              <form action="{{ route('admin.lesson.update') }}" method="POST" enctype="multipart/form-data">

                                                                                                  @csrf
                                                                                                  <div class="row">
                                                                                                    <div class="form-group col-md-6 col-sm-12">
                                                                                                        <label for="password">Class Name</label>
                                                                                            <select name="class_id"  class="form-control form-control-sm">
                                                                                                <option value="">Select Class</option>
                                                                               @foreach ($class_details as $user_class_update)
                                            <option value="{{ $user_class_update->id }}" {{ $user->sreni_id == $user_class_update->id  ? 'selected' : '' }}>{{ $user_class_update->name }}</option>

                                                                                @endforeach
                                                                                                        </select>
                                                                                                    </div>


                                                        <div class="form-group col-md-6 col-sm-12">
                                                                                                        <label for="password">Department Name</label>
                                                                                            <select name="department_id"  class="form-control form-control-sm">
                                                                                                <option readonly value="0">--- Select Department ---</option>
                                                                                                           @foreach ($dp_details as $user_class_update)
                                                             <option value="{{ $user_class_update->id }}" {{ $user->department_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                                                @endforeach
                                                                                                        </select>
                                                                                                        <input type="hidden" name="id" value="{{ $user->id }}" placeholder="Enter your Name" class="form-control form-control-sm" />
                                                                                                    </div>

                                                                                                    <div class="form-group col-md-6 col-sm-12">
                                                                                                        <label for="password">Section Name</label>
                                                                                            <select name="section_id"  class="form-control form-control-sm">
                                                                                                       @foreach ($section_details as $user_class_update)
                                                             <option value="{{ $user_class_update->id }}" {{ $user->section_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                                                @endforeach
                                                                                                        </select>
                                                                                                    </div>

                                                                                                     <div class="form-group col-md-6 col-sm-12">
                                                                                                        <label for="password">Subject Name</label>
                                                                                            <select name="subject_id"  class="form-control form-control-sm">
                                                                                                               @foreach ($subject_details as $user_class_update)
                                                             <option value="{{ $user_class_update->id }}" {{ $user->subject_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                                                @endforeach
                                                                                                        </select>
                                                                                                    </div>

                                                                                                    <div class="form-group col-md-12 col-sm-12">
                                                                                                        <label>Lesson</label>
                                                                                                        <table class="table table-bordered" id="dynamic_field">
                                                                                                            @foreach($lesson_list as $key=>$lesson_list_new)

                                                                                                            @if($key == 0)


                                                                                                            <tr>
                                                                                                                <td>

                                                                                                                    <input type="text" name="name[]" value="{{ $lesson_list_new->lesson_name }}" placeholder="Enter your Name" class="form-control form-control-sm name_list" />


                                                                                                                </td>
                                                                                                                <td>

                                                                                                                    <button type="button" name="add" id="add" class="btn btn-success"><i class="uil-plus"></i></button>





                                                                                                                </td>
                                                                                                            </tr>


                                                                                                            @else
                                                                                                            <tr id="row{{ $key }}" class="dynamic-added">
                                                                                                                <td>

                                                                                                                    <input type="text" name="name[]" value="{{ $lesson_list_new->lesson_name }}" placeholder="Enter your Name" class="form-control form-control-sm name_list" />


                                                                                                                </td>
                                                                                                                <td>



                                                                                                                <button type="button" name="remove" id="{{ $key }}" class="btn btn-danger btn_remove">X</button>



                                                                                                                </td>
                                                                                                            </tr>
                                                                                                            @endif
                                                                                                            @endforeach
                                                                                                        </table>


                                                                                                    </div>

                                                                                                  </div>





                                                                                                  <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                                                                                              </form>
                                                                                          </div>

                                                                                        </div>
                                                                                      </div>
                                                                                    </div>
                                          @endif


                                          @if (Auth::guard('admin')->user()->can('les_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.lesson.delete',$user->id) }}" method="POST" style="display: none;">
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
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add New Lesson</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
                        <div class="modal-body">
                            <form class="custom-validation" action="{{ route('admin.lesson.store') }}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
<div class="row">
<div class="form-group col-md-3 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                    <select name="class_id"  class="form-control form-control-sm">
                                                        <option value="">----Select Class----</option>
                                       @foreach ($class_details as $user_class_update)
                                 <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>


                <div class="form-group col-md-3 col-sm-12">
                                                                <label for="password">Department Name</label>
                                                    <select name="department_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-3 col-sm-12">
                                                                <label for="password">Section Name</label>
                                                    <select name="section_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-3 col-sm-12">
                                                                <label for="password">Subject Name</label>
                                                    <select name="subject_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-12 col-sm-12">
                                                            <table class="table table-bordered" id="dynamicAddRemove">
                                                                <tr>
                                                                    <th>Lesson</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                                <tr>
                                                                    <td><input type="text" id="first0" name="lesson[]" placeholder="Enter Lesson Name" class="form-control form-control-sm" />
                                                                    </td>
                                                                    <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary"><i class="far fa-plus-square"></i></button></td>
                                                                </tr>
                                                            </table>
                                                            </div>
                                                        </div>


                        </div>






                                            </div>

                                        </div>
                                    </div>



                                    <div class="col-lg-12">
                                        <div class="float-right d-none d-md-block">
                                            <div class="form-group mb-4">
                                                <div>
                                                    <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
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
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" id="first'+i+'" name="lesson[]" placeholder="Enter Lesson Name" class="form-control form-control-sm" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field"><i class="uil-trash"></i></button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>


<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar1").click(function () {
        ++i;
        $("#dynamicAddRemove1").append('<tr><td><input type="text" id="first'+i+'" name="lesson[]" placeholder="Enter Lesson Name" class="form-control form-control-sm" /></td><td><button type="button" class="btn btn-outline-danger remove-input-field1"><i class="uil-trash"></i></button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field1', function () {
        $(this).parents('tr').remove();
    });
</script>

<script type="text/javascript">
    $(document).ready(function(){

      var i=1;


      $('#add').click(function(){
           i++;
           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Enter your Name" class="form-control form-control-sm name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');
      });


      $(document).on('click', '.btn_remove', function(){
           var button_id = $(this).attr("id");
           $('#row'+button_id+'').remove();
      });

    });
</script>
@endsection







