@extends('admin.master.master')

@section('title')
Class Teacher List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

 <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Class Teacher Information</h4>

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
                                @if (Auth::guard('admin')->user()->can('ct_add'))
<button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add New Class Teacher
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
<div class="table-responsive">
    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                            <th>SL</th>

                                    <th>Class </th>
                                    <th>Department</th>
                                    <th>Section </th>

                                    <th>Name</th>


                                    <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($class_teacher_details as $user)


                                <tr>
                                   <td>


                                    {{ $loop->index+1 }}




                                </td>

                                <td>
                                    @foreach ($class_details as $user_class)

                                    @if($user->class_id == $user_class->id)


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




                                    @foreach ($teacher_details as $dp_class)

                                    @if($user->teacher_id == $dp_class->id)


                                    {{ $dp_class->name }}

                                        @endif
                                    @endforeach



                                    </td>

                                    <td>
                                      @if (Auth::guard('admin')->user()->can('ct_update'))



                    <button type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-pencil-alt"></i></button>


                                          <!-- Modal -->
                                          <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Class Teacher Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form class="custom-validation" action="{{ route('admin.class_teacher.update') }}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
<div class="row">
<div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                    <select name="class_id"  class="form-control form-control-sm">
                                                        <option value="">Select Class</option>
                                       @foreach ($class_details as $user_class_update)
                     <option value="{{ $user_class_update->id }}" {{ $user->class_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

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
                                                                <label for="name">Teacher Name</label>
                                                                <select name="teacher_id"  class="form-control form-control-sm">
                                                                    <option value="">Select Teacher Name</option>
                                                   @foreach ($teacher_details as $user_class_update)
                                 <option value="{{ $user_class_update->id }}" {{ $user->teacher_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                    @endforeach
                                                                            </select>
                                                                <input type="hidden" class="form-control form-control-sm"  value="{{ $user->id }}" id="name" name="id" placeholder="Enter Name">
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
  </div>
</div>


@endif






                                  @if (Auth::guard('admin')->user()->can('ct_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.class_teacher.delete',$user->id) }}" method="POST" style="display: none;">
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
                <h5 class="modal-title" id="myLargeModalLabel">Add New Class Teacher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
                        <div class="modal-body">
                            <form class="custom-validation" action="{{ route('admin.class_teacher.store') }}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
<div class="row">
<div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                    <select name="class_id"  class="form-control form-control-sm">
                                                        <option value="">Select Class</option>
                                       @foreach ($class_details as $user_class_update)
                                 <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                        @endforeach
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
                                                                <label for="name">Teacher Name</label>
                                                                <select name="teacher_id"  class="form-control form-control-sm">
                                                                    <option value="">Select Teacher Name</option>
                                                   @foreach ($teacher_details as $user_class_update)
                                 <option value="{{ $user_class_update->id }}"  >{{ $user_class_update->name }}</option>

                                                    @endforeach
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
@endsection







