@extends('admin.master.master')

@section('title')
Reminder Type | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Reminder Type List</h4>

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
                                @if (Auth::guard('admin')->user()->can('reminder_type_add'))
<button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add Reminder Type
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

                                    <th>Day</th>
                                    <th>Type</th>
                                    <th>Status</th>

                                    <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($reminder_type_details as $user)


                                <tr>
                                   <td>


                                    {{ $loop->index+1 }}




                                </td>

                                    <td>




  {{ $user->days }}



                                    </td>
                                    <td>




                                        {{ $user->reminder_type }}



                                                                          </td>
                                    <td>

                                        @if($user->status == 1)
<span class="badge bg-success">Active</span>
                                        @else
<span class="badge bg-danger">Inactive</span>
                                        @endif


                                    </td>

                                    <td>
                                      @if (Auth::guard('admin')->user()->can('reminder_type_update'))
                                          <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm" >
                                          <i class="fas fa-pencil-alt"></i></button>

                                          <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Reminder Type Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.reminder_type.update') }}" method="POST" enctype="multipart/form-data">

                                                        @csrf
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Total Days</label>
                                                <input type="text" class="form-control form-control-sm" id="name" name="days" placeholder="Enter Total Days" value="{{ $user->days }}">

                                                <input type="hidden" class="form-control form-control-sm" id="name" name="id" placeholder="Enter Name" value="{{ $user->id }}">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Type</label>
                                                    <select name="reminder_type"  class="form-control form-control-sm">

                                                <option value="Before" {{ $user->status == 'Before' ? 'selected' : '' }}>Before</option>
                                             <option value="After" {{ $user->status == 'After' ? 'selected' : '' }}>After</option>

                                                                </select>
                                                            </div>

                                                             <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Status</label>
                                                    <select name="status"  class="form-control form-control-sm">

                                                <option value="1" {{ $user->status == 1 ? 'selected' : '' }}>Active</option>
                                             <option value="0" {{ $user->status == 0 ? 'selected' : '' }}>InActive</option>

                                                                </select>
                                                            </div>
                                                        </div>





                                                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                                                    </form>
                                                </div>

                                              </div>
                                            </div>
                                          </div>
@endif



                                  @if (Auth::guard('admin')->user()->can('reminder_type_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.reminder_type.delete',$user->id) }}" method="POST" style="display: none;">
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
                <h5 class="modal-title" id="myLargeModalLabel">Add New Reminder Type</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
                        <div class="modal-body">
                            <form class="custom-validation" action="{{ route('admin.reminder_type.store') }}" method="post" enctype="multipart/form-data">
                              @csrf
                                <div class="row">

                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">


                                                <div class="row">
                            <div class="form-group col-md-4 col-sm-12">
                                <label for="name">Total Days</label>
                                <input type="text" class="form-control form-control-sm" id="name" name="days" placeholder="Enter Total Days">
                            </div>

                            <div class="form-group col-md-4 col-sm-12">
                                <label for="password">Type</label>
                    <select name="reminder_type"  class="form-control form-control-sm">

                <option value="Before" >Before</option>
             <option value="After">After</option>

                                </select>
                            </div>

                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Status</label>
                                                    <select name="status"  class="form-control form-control-sm">

                                                <option value="1" >Active</option>
                                             <option value="0">InActive</option>

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
@endsection







