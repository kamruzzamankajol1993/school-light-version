@extends('admin.master.master')

@section('title')
Visitor Book List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Visitor Book Information</h4>

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
                @if (Auth::guard('admin')->user()->can('visitor_create'))
                <button class="btn btn-sm btn-primary dropdown-toggle waves-effect waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Visitor Book
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
                                <th>Purpose</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th> Date</th>
                                <th>In Time</th>
                                <th>Out Time</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($visitor_details as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>

                                    {{ $user->purpose }}
                                </td>

                                <td>
                                    {{ $user->name	 }}
                                </td>

                                <td>
                                    {{ $user->phone }}
                                </td>

                                <td>
                                    {{ date('d-m-Y', strtotime($user->date))}}

                                </td>
                                <td>
                                    {{ $user->in_time }}
                                </td>
                                <td>
                                    {{ $user->out_time }}
                                </td>
                                <td>
                                    @if (Auth::guard('admin')->user()->can('visitor_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary btn-sm waves-light waves-effect">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Visitor Book
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.visitor_book.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf



                                                        <div class="row mt-3">
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Purpose</label>

                                                                <select class="form-control form-control-sm" name="purpose">
                                                                    <option value="">----Please Select ----</option>
                                                                    @foreach($purpose_details as $all_type)

                                                            <option value="{{ $all_type->name }}" {{ $all_type->name == $user->purpose ? 'selected':'' }}>{{ $all_type->name }}</option>

                                                                    @endforeach
                                                                </select>

                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->name }}" name="name" placeholder="Enter Name">
                                                                <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $user->id }}" name="id" placeholder="Enter Name">

                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Phone</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->phone }}" name="phone" placeholder="Enter Phone">


                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">ID Card</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->id_card }}" name="id_card" placeholder="Enter ID Card">


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Number Of Person</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->number_of_person }}" name="number_of_person" placeholder="Enter Number Of Person">


                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Date</label>
                                                                <input type="date" class="form-control form-control-sm" id="name" value="{{ $user->date }}" name="date" placeholder="Enter Date">


                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">In Time</label>
                                                                <input type="time" class="form-control form-control-sm" value="{{ $user->in_time }}" id="name" name="in_time" placeholder="Enter  Time">


                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Out Time</label>
                                                                <input type="time" class="form-control form-control-sm" value="{{ $user->out_time }}" id="name" name="out_time" placeholder="Enter  Time">


                                                            </div>
                                                        </div>



                                                        <div class="row mt-3">


                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Attach Document</label>
                                                                <input type="file" class="form-control form-control-sm" id="name" name="document" placeholder="Enter Date">


                                                            </div>

                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Note</label>
                                                                <textarea class="form-control form-control-sm" id="name" name="note">
                                                                  {{ $user->note }}
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


                                    @if (Auth::guard('admin')->user()->can('visitor_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-xl{{ $user->id }}"
                                        class="btn btn-info btn-sm waves-light waves-effect">
                                        <i class="fas fa-eye"></i></button>

                                 <!--  Small modal example -->
                                 <div class="modal fade bs-example-modal-xl{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="myExtraLargeModalLabel">Detail Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                                                </button>
                                            </div>
                                            <div class="modal-body">

                                                <table class="table table-striped">
                                                    <tbody><tr>
                                                    <th class="border0">Purpose</th>
                                                    <td class="border0">{{ $user->purpose }}</td>
                                                    <th class="border0">Name</th>
                                                    <td class="border0">{{ $user->name }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{ $user->phone }}</td>
                                                    <th>Number Of Person</th>
                                                    <td>{{ $user->number_of_person }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Date</th>
                                                    <td>{{ date('d-m-Y', strtotime($user->date))}}</td>
                                                    <th>In Time</th>
                                                    <td>{{ $user->in_time }}</td>

                                                </tr>

                                                <tr>
                                                    <th>Out Time</th>
                                                    <td>{{ $user->out_time }}</td>
                                                    <th>Note</th>
                                                    <td>{{ $user->note }}</td>

                                                </tr>


                                                <tr>
                                                    <th>Id Card</th>
                                                    <td>{{ $user->id_card }}</td>
                                                    @if(empty($user->doc))

                                                    @else
                                                    <th>Document</th>
                                                    <td><a type="button" href="{{ route('visitor_book_download',$user->id) }}"  class="btn btn-success btn-sm waves-effect waves-light" autocomplete="off">
                                                        <i class="uil-file-download-alt"></i></a></td>
                                                        @endif

                                                </tr>

                                            </tbody>
                                            </table>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                    @endif



                                    @if (Auth::guard('admin')->user()->can('visitor_delete'))

                                    <button type="button" class="btn btn-danger btn-sm waves-light waves-effect"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.visitor_book.delete',$user->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Visitor Book</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.visitor_book.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf




                    <div class="row mt-3">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Purpose</label>

                            <select class="form-control form-control-sm" name="purpose">
                                <option value="">----Please Select ----</option>
                                @foreach($purpose_details as $all_type)

                        <option value="{{ $all_type->name }}" >{{ $all_type->name }}</option>

                                @endforeach
                            </select>

                        </div>


                        <div class="form-group col-md-4 col-sm-12 mt-1">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control-sm" id="name" value="" name="name" placeholder="Enter Name">


                        </div>

                        <div class="form-group col-md-4 col-sm-12 mt-1">
                            <label for="name">Phone</label>
                            <input type="text" class="form-control form-control-sm" id="name" value="" name="phone" placeholder="Enter Phone">


                        </div>

                        <div class="form-group col-md-6 col-sm-12 mt-1">
                            <label for="name">ID Card</label>
                            <input type="text" class="form-control form-control-sm" id="name" value="" name="id_card" placeholder="Enter ID Card">


                        </div>


                        <div class="form-group col-md-6 col-sm-12 mt-1">
                            <label for="name">Number Of Person</label>
                            <input type="text" class="form-control form-control-sm" id="name" value="" name="number_of_person" placeholder="Enter Number Of Person">


                        </div>


                        <div class="form-group col-md-4 col-sm-12 mt-1">
                            <label for="name">Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" value="" name="date" placeholder="Enter Date">


                        </div>
                        <div class="form-group col-md-4 col-sm-12 mt-1">
                            <label for="name">In Time</label>
                            <input type="time" class="form-control form-control-sm" value="" id="name" name="in_time" placeholder="Enter  Time">


                        </div>

                        <div class="form-group col-md-4 col-sm-12 mt-1">
                            <label for="name">Out Time</label>
                            <input type="time" class="form-control form-control-sm" value="" id="name" name="out_time" placeholder="Enter  Time">


                        </div>
                    </div>



                    <div class="row mt-3">


                        <div class="form-group col-md-12 col-sm-12 mt-1">
                            <label for="name">Attach Document</label>
                            <input type="file" class="form-control form-control-sm" id="name" name="doc" placeholder="Enter Date">


                        </div>

                        <div class="form-group col-md-12 col-sm-12 mt-1">
                            <label for="password">Note</label>
                            <textarea class="form-control form-control-sm" id="name" name="note">

                                    </textarea>
                        </div>
                    </div>





                    <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
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
