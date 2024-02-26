@extends('admin.master.master')

@section('title')
Hostel Room Info List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Hostel Room  Information</h4>

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
                @if (Auth::guard('admin')->user()->can('hostel_room_add'))
                <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Hostel Room
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
                                <th>Room Number / Name</th>
                                <th>Hostel</th>
                                <th>Room Type</th>
                                <th>Number of Bed</th>
                                <th>Cost Per Bed</th>
                                <th>Description</th>
                                 <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($hostel_room_details as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>

                                    {{ $user->number_or_name	 }}
                                </td>

                                <td>

                                    {{ $user->hostel }}
                                </td>

                                <td>

                                    {{ $user->room_type }}
                                </td>

                                <td>

                                    {{ $user->number_of_bed }}

                                </td>

                                <td>

                                    {{ $user->cost_per_bed }}

                                </td>

                                <td>

                                    {{ $user->des }}

                                </td>


                                <td>
                                    @if (Auth::guard('admin')->user()->can('hostel_room_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Hostel Room
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.hostel_room.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf

                                                        <div class="row">

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Room Number / Name</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="number_or_name" placeholder="Room Number / Name"
                                                                    value="{{ $user->number_or_name }}">

                                                                <input type="hidden" class="form-control form-control-sm" id="name"
                                                                    name="id" placeholder="Enter Name"
                                                                    value="{{ $user->id }}">
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Hostel</label>
                                                                <select name="hostel"  class="form-control form-control-sm">

                                                                    @foreach($hostel_details as $new_hostel2)

                                                              <option value="{{ $new_hostel2->name }}" {{ $user->hostel == $new_hostel2->name  ? 'selected' : '' }}>{{ $new_hostel2->name }}</option>
                                                             @endforeach

                                                                                             </select>
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Room type</label>
                                                                <select name="room_type"  class="form-control form-control-sm">

                                                                    @foreach($room_type_details as $new_room)

                                                              <option value="{{ $new_room->room_type }}" {{ $user->room_type == $new_room->room_type  ? 'selected' : '' }}>{{ $new_room->room_type }}</option>
                                                             @endforeach

                                                                                             </select>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Number of Bed</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="number_of_bed" placeholder="Enter Fare"
                                                                    value="{{ $user->number_of_bed }}">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Cost Per Bed</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="cost_per_bed" placeholder="Enter Fare"
                                                                    value="{{ $user->cost_per_bed }}">
                                                            </div>



                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Description</label>

                                                                <textarea class="form-control form-control-sm" id="name"
                                                                name="des">
                                                                {{ $user->des}}
                                                            </textarea>
                                                            </div>






                                                        </div>





                                                        <button type="submit"
                                                            class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif



                                    @if (Auth::guard('admin')->user()->can('hostel_room_delete'))

                                    <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.hostel_room.delete',$user->id) }}" method="POST"
                                        style="display: none;">
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
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myLargeModalLabel">Add Hostel Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.hostel_room.store') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf

                                                        <div class="row">

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Room Number / Name</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="number_or_name" placeholder="Room Number / Name"
                                                                 >


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Hostel</label>
                                                                <select name="hostel"  class="form-control form-control-sm">

                                                                    @foreach($hostel_details as $new_hostel)

                                                              <option value="{{ $new_hostel->name }}">{{ $new_hostel->name}}</option>
                                                             @endforeach

                                                                                             </select>
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Room type</label>
                                                                <select name="room_type"  class="form-control form-control-sm">

                                                                    @foreach($room_type_details as $new_room)

                                                              <option value="{{ $new_room->room_type }}" >{{ $new_room->room_type }}</option>
                                                             @endforeach

                                                                                             </select>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Number of Bed</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="number_of_bed" placeholder="Enter Fare"
                                                                >
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Cost Per Bed</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="cost_per_bed" placeholder="Enter Fare"
                                                                   >
                                                            </div>



                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Description</label>

                                                                <textarea class="form-control form-control-sm" id="name"
                                                                name="des">

                                                            </textarea>
                                                            </div>






                                                        </div>





                                                        <button type="submit"
                                                            class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
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
