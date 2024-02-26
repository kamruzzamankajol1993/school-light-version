@extends('admin.master.master')

@section('title')
Postal Receive List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Postal Receive Information</h4>

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
                @if (Auth::guard('admin')->user()->can('psr_create'))
                <button class="btn btn-sm btn-primary dropdown-toggle waves-effect waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Postal Receive
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
                                <th>From Title</th>
                                <th>Reference No</th>
                                <th>To Title</th>
                                <th> Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($postalreceive_details as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>

                                    {{ $user->from_title }}
                                </td>

                                <td>
                                    {{ $user->refrence_no	 }}
                                </td>

                                <td>
                                    {{ $user->to_title }}
                                </td>

                                <td>
                                    {{ date('d-m-Y', strtotime($user->date))}}

                                </td>


                                <td>
                                    @if (Auth::guard('admin')->user()->can('psr_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary btn-sm waves-light waves-effect">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Postal Receive
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.postal_receive.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf



                                                        <div class="row mt-3">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">From Title</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->from_title }}" name="from_title" placeholder="Enter From Title">
                                                                <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $user->id }}" name="id" placeholder="Enter Name">

                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Reference No</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->refrence_no }}" name="refrence_no" placeholder="Enter Reference No">


                                                            </div>



                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Address</label>
                                                                <textarea class="form-control form-control-sm" id="name" name="address">
                                                                   {{ $user->address }}
                                                                        </textarea>
                                                            </div>
                                                        </div>



                                                        <div class="row mt-3">
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">To Title</label>
                                                                <input type="text" class="form-control form-control-sm" value="{{ $user->to_title }}" id="name" name="to_title" placeholder="Enter To Title">


                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Date</label>
                                                                <input type="date" class="form-control form-control-sm" value="<?php  echo date('Y-m-d')?>"  id="name" value="{{ $user->date }}" name="date" placeholder="Enter Date">


                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
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


                                    @if (Auth::guard('admin')->user()->can('psr_update'))
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
                                                    <th class="border0">To Title</th>
                                                    <td class="border0">{{ $user->to_title }}</td>
                                                    <th class="border0">Reference No</th>
                                                    <td class="border0">{{ $user->refrence_no }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td>{{ $user->address }}</td>
                                                    <th>Note</th>
                                                    <td>{{ $user->note }}</td>
                                                </tr>

                                                <tr>
                                                    <th>From title</th>
                                                    <td>{{ $user->from_title }}</td>
                                                    <th>Date</th>
                                                    <td>{{ date('d-m-Y', strtotime($user->date))}}</td>
                                                </tr>

                                                @if(empty($user->document))

                                                @else
                                                <tr>
                                                    <th>Document</th>
                                                    <td><a type="button" href="{{ route('postal_receive_download',$user->id) }}"  class="btn btn-success btn-sm waves-effect waves-light" autocomplete="off">
                                                        <i class="uil-file-download-alt"></i></a></td>


                                                </tr>
                                                @endif
                                            </tbody>
                                            </table>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                    @endif



                                    @if (Auth::guard('admin')->user()->can('psr_delete'))

                                    <button type="button" class="btn btn-danger btn-sm waves-light waves-effect"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.postal_receive.delete',$user->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Postal Receive</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.postal_receive.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf




                    <div class="row mt-3">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">From Title</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="from_title" placeholder="Enter From Title">


                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Reference No</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="refrence_no" placeholder="Enter Reference No">


                        </div>



                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">Address</label>
                            <textarea class="form-control form-control-sm" id="name" name="address">

                                    </textarea>
                        </div>
                    </div>



                    <div class="row mt-3">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">To Title</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="to_title" placeholder="Enter To Title">


                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" name="date" placeholder="Enter Date">


                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Attach Document</label>
                            <input type="file" class="form-control form-control-sm" id="name" name="document" placeholder="Enter Date">


                        </div>

                        <div class="form-group col-md-12 col-sm-12">
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
