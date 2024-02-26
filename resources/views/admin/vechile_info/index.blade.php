@extends('admin.master.master')

@section('title')
Vechile Info List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Vechile Information</h4>

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
                @if (Auth::guard('admin')->user()->can('vehicle_add'))
                <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Vechile
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
                                <th>Route Name</th>
                                <th>Vehicle Number</th>
                                <th>Vehicle Model</th>
                                <th>Year Made</th>
                                <th>Driver Name</th>
                                <th>Driver License</th>
                                <th>Driver Contact</th>
                                <th>Note</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($vechile_details as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>

                                    {{ $user->route_id }}
                                </td>

                                <td>

                                    {{ $user->v_number }}
                                </td>

                                <td>

                                    {{ $user->v_model }}
                                </td>

                                <td>

                                    {{ $user->year_made }}

                                </td>

                                <td>

                                    {{ $user->driver_name }}

                                </td>

                                <td>

                                    {{ $user->driver_license }}

                                </td>

                                <td>

                                    {{ $user->driver_contact }}

                                </td>

                                <td>

                                    {{ $user->note }}

                                </td>
                                <td>
                                    @if (Auth::guard('admin')->user()->can('vehicle_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Vechile
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.vehicle_info.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf

                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Route Name</label>
                                                                <select name="route_id"  class="form-control form-control-sm">
                                                                    @foreach ($route_details as $user_class_update)
                                                              <option value="{{ $user_class_update->route_title }}" {{ $user->route_id == $user_class_update->route_title  ? 'selected' : '' }}>{{ $user_class_update->route_title }}</option>

                                                                     @endforeach
                                                                                             </select>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Vehicle Number</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="v_number" placeholder="Enter Route Title"
                                                                    value="{{ $user->v_number }}">

                                                                <input type="hidden" class="form-control form-control-sm" id="name"
                                                                    name="id" placeholder="Enter Name"
                                                                    value="{{ $user->id }}">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Vehicle Model</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="v_model" placeholder="Enter Fare"
                                                                    value="{{ $user->v_model }}">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Year Made</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="year_made" placeholder="Enter Fare"
                                                                    value="{{ $user->year_made }}">
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Driver Name</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="driver_name" placeholder="Enter Fare"
                                                                    value="{{ $user->driver_name }}">
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Driver License</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="driver_license" placeholder="Enter Fare"
                                                                    value="{{ $user->driver_license }}">
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Driver_Contact</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"
                                                                    name="driver_contact" placeholder="Enter Fare"
                                                                    value="{{ $user->driver_contact}}">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Note</label>

                                                                <textarea class="form-control form-control-sm" id="name"
                                                                name="note">
                                                                {{ $user->note}}
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



                                    @if (Auth::guard('admin')->user()->can('vehicle_delete'))

                                    <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.vehicle_info.delete',$user->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Vechile </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.vehicle_info.store') }}"
                method="POST" enctype="multipart/form-data">

                @csrf

                <div class="row">
                    <div class="form-group col-md-6 col-sm-12">
                        <label for="password">Route Name</label>
                        <select name="route_id"  class="form-control form-control-sm">
                            @foreach ($route_details as $user_class_update)
                      <option value="{{ $user_class_update->route_title }}" >{{ $user_class_update->route_title }}</option>

                             @endforeach
                                                     </select>
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label for="name">Vehicle Number</label>
                        <input type="text" class="form-control form-control-sm" id="name"
                            name="v_number" placeholder="Enter Vehicle Number"
                          >


                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label for="password">Vehicle Model</label>
                        <input type="text" class="form-control form-control-sm" id="name"
                            name="v_model" placeholder="Enter Vehicle Model"
                            >
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label for="password">Year Made</label>
                        <input type="text" class="form-control form-control-sm" id="name"
                            name="year_made" placeholder="Enter Year Made"
                            >
                    </div>


                    <div class="form-group col-md-6 col-sm-12">
                        <label for="password">Driver Name</label>
                        <input type="text" class="form-control form-control-sm" id="name"
                            name="driver_name" placeholder="Enter Driver Name"
                            >
                    </div>


                    <div class="form-group col-md-6 col-sm-12">
                        <label for="password">Driver License</label>
                        <input type="text" class="form-control form-control-sm" id="name"
                            name="driver_license" placeholder="Enter Driver License"
                            >
                    </div>


                    <div class="form-group col-md-6 col-sm-12">
                        <label for="password">Driver Contact</label>
                        <input type="text" class="form-control form-control-sm" id="name"
                            name="driver_contact" placeholder="Enter Driver Contact"
                            >
                    </div>

                    <div class="form-group col-md-6 col-sm-12">
                        <label for="password">Note</label>

                        <textarea class="form-control form-control-sm" id="name"
                        name="note">

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
