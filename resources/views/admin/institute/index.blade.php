@extends('admin.master.master')

@section('title')
Institute information | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Institute Information</h4>

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
                                @if (Auth::guard('admin')->user()->can('ins_create'))
<button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add Institute information
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
                                            <th>Icon</th>
                                            <th>Image</th>
                                    <th>Name </th>
                                    <th>Code</th>
                                    <th>Address </th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                     <th>Session</th>
                                    <th>Session Start Month</th>

                                    <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($ins_details as $user)


                                <tr>
                                   <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td><img src="{{ asset('/') }}{{ $user->icon }}" style="height:30px;"/></td>
                                <td><img src="{{ asset('/') }}{{ $user->logo }}" style="height:30px;"/></td>
                                <td>



                                    {{ $user->name }}


                                </td>

                                 <td>
                                    {{ $user->code }}

                                </td>
                                 <td>
                                   {{ $user->address }}

                                </td>
                                   <td>




  {{ $user->phone }}



                                    </td>

                                    <td>




  {{ $user->email }}



                                    </td>
                                    <td>{{ $user->session }}</td>
                                     <td>{{ $user->session_start_month }}</td>


                                    <td>
                                      @if (Auth::guard('admin')->user()->can('ins_update'))

                    <button type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-pencil-alt"></i></button>


                                          <!-- Modal -->
                                          <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Institute Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
      <div class="modal-body">
        <form class="custom-validation" action="{{ route('admin.institute_information.update') }}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
<div class="row">
<div class="form-group col-md-4 col-sm-12">
                                    <label for="password">Institute Name</label>
                        <input type="text" class="form-control form-control-sm" value="{{ $user->name }}" name="name" placeholder="Enter Name">

                        <input type="hidden" class="form-control form-control-sm" value="{{ $user->id }}" name="id" placeholder="Enter Name">
                                                            </div>


                <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Institute Code</label>
                                   <input type="text" class="form-control form-control-sm" value="{{ $user->code }}" name="code" placeholder="Enter Code">
                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                    <label for="password">Institute Address</label>
                     <input type="text" class="form-control form-control-sm" value="{{ $user->address }}" name="address" placeholder="Enter Address">
                                                            </div>
                                                        </div>
                                                <div class="row">



                            <div class="form-group col-md-3 col-sm-12">
                                <label for="name">Phone</label>
                                <input type="text" class="form-control form-control-sm" value="{{ $user->phone }}" name="phone" placeholder="Enter Phone">
                            </div>

                             <div class="form-group col-md-3 col-sm-12">
                                <label for="name">Email</label>
                                <input type="email" class="form-control form-control-sm" value="{{ $user->email }}" name="email" placeholder="Enter Email">
                            </div>

                            <div class="form-group col-md-3 col-sm-12">
                                <label for="name">Session</label>
                                <input type="text" class="form-control form-control-sm" value="{{ $user->session }}" name="session" placeholder="Enter Session">

                            </div>

                            <div class="form-group col-md-3 col-sm-12">
                                <label for="name">Session Start Month</label>
                                <input type="text" class="form-control form-control-sm" value="{{ $user->session_start_month }}" name="session_start_month" placeholder="Enter Session Start Month">
                            </div>

                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name"> Logo</label>
                                <input type="file" class="form-control form-control-sm" id="name" name="logo" placeholder="Enter Address">
                                <img src="{{ asset('/') }}{{ $user->logo }}" style="height:20px;"/>
                            </div>


                            <div class="form-group col-md-6 col-sm-12">
                                <label for="name">Icon</label>
                                <input type="file" class="form-control form-control-sm" id="name" name="icon" placeholder="Enter Icon">
                                <img src="{{ asset('/') }}{{ $user->icon }}" style="height:20px;"/>
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


 @if (Auth::guard('admin')->user()->can('ins_view'))

                    <button type="button"  data-bs-toggle="modal" data-bs-target=".bs-example-modal-lgview{{ $user->id }}"
                                          class="btn btn-success waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-eye"></i></button>


                                          <!-- Modal -->
                    <!-- Modal -->
                    <div class="modal fade bs-example-modal-lgview{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel"> Institute Information</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
</button>
</div>
      <div class="modal-body">

        <div class="row">
            <div class="col-md-4">
                <section>
                    <h4><u>Personal Information</u></h4>
                    <img src="{{ asset('/') }}{{ $user->logo }}" style="height:150px;"/>
                    <ul>
                        <li>Name:{{ $user->name }}</li>
                        <li>Code:{{ $user->code }}</li>

                    </ul>
                </section>

            </div>
            <div class="col-md-8">
                <h4><u>General Information</u></h4>

                <div class="row mt-3">


                     <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Phone Number:{{ $user->phone }}"

                            </div>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Email:{{ $user->email }}"

                            </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Address:{{ $user->address }}"

                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Session:{{ $user->session }}"

                            </div>
                        </div>
                    </div>
                     <div class="col-md-6">
                        <div class="card">
                            <div class="card-header">
                                Session Start Month:{{ $user->session_start_month }}"

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

      </div>

    </div>
  </div>
</div>


@endif



                                  @if (Auth::guard('admin')->user()->can('ins_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.institute_information.delete',$user->id) }}" method="POST" style="display: none;">
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

  <!--  Large modal example -->
  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Institute Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.institute_information.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                       <div class="row">

                          <div class="col-lg-12">
                              <div class="card">
                                  <div class="card-body">
<div class="row">
<div class="form-group col-md-4 col-sm-12">
                          <label for="password">Institute Name</label>
              <input type="text" class="form-control form-control-sm"  name="name" placeholder="Enter Name">


                                                  </div>


      <div class="form-group col-md-4 col-sm-12">
                                                      <label for="password">Institute Code</label>
                         <input type="text" class="form-control form-control-sm"  name="code" placeholder="Enter Code">
                                                  </div>

                                                  <div class="form-group col-md-4 col-sm-12">
                                          <label for="password">Institute Address</label>
           <input type="text" class="form-control form-control-sm"  name="address" placeholder="Enter Address">
                                                  </div>
                                              </div>
                                      <div class="row">



                  <div class="form-group col-md-3 col-sm-12">
                      <label for="name">Phone</label>
                      <input type="text" class="form-control form-control-sm"  name="phone" placeholder="Enter Phone">
                  </div>

                   <div class="form-group col-md-3 col-sm-12">
                      <label for="name">Email</label>
                      <input type="email" class="form-control form-control-sm" name="email" placeholder="Enter Email">
                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                      <label for="name">Session</label>
                      <input type="text" class="form-control form-control-sm" name="session" placeholder="Enter Session">

                  </div>

                  <div class="form-group col-md-3 col-sm-12">
                      <label for="name">Session Start Month</label>
                      <input type="text" class="form-control form-control-sm"  name="session_start_month" placeholder="Enter Session Start Month">
                  </div>

                  <div class="form-group col-md-6 col-sm-12">
                      <label for="name"> Logo</label>
                      <input type="file" class="form-control form-control-sm" id="name" name="logo" placeholder="Enter Address">

                  </div>


                  <div class="form-group col-md-6 col-sm-12">
                    <label for="name">Icon</label>
                    <input type="file" class="form-control form-control-sm" id="name" name="icon" placeholder="Enter Icon">

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







