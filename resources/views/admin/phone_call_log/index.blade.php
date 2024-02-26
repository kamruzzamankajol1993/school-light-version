@extends('admin.master.master')

@section('title')
Phone Call Log List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Phone Call Log Information</h4>

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
                @if (Auth::guard('admin')->user()->can('pcl_create'))
                <button class="btn btn-sm btn-primary dropdown-toggle waves-effect waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Phone Call Log
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
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Date</th>
                                <th> Next Follow Up Date</th>
                                <th>Call Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($phone_call_log_details as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>

                                    {{ $user->name }}
                                </td>

                                <td>
                                    {{ $user->phone	 }}
                                </td>



                                <td>
                                    {{ date('d-m-Y', strtotime($user->date))}}

                                </td>

                                <td>
                                    {{ $user->next_follow_up_date }}
                                </td>


                                <td>
                                    {{ $user->call_type }}
                                </td>


                                <td>
                                    @if (Auth::guard('admin')->user()->can('pcl_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary btn-sm waves-light waves-effect">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Phone Call Log
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.phone_call_log.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf



                                                        <div class="row mt-3">
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->name }}" name="name" placeholder="Enter Name">
                                                                <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $user->id }}" name="id" placeholder="Enter Id">

                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Phone</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->phone }}" name="phone" placeholder="Enter Phone">


                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Date</label>
                                                                <input type="date" class="form-control form-control-sm" value="<?php  echo date('Y-m-d')?>"  id="name" value="{{ $user->date }}" name="date" placeholder="Enter Date">


                                                            </div>

                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Description</label>
                                                                <textarea class="form-control form-control-sm" id="name" name="des">
                                                                   {{ $user->des }}
                                                                        </textarea>
                                                            </div>
                                                        </div>



                                                        <div class="row mt-3">
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Next Follow Up Date</label>
                                                                <input type="date" class="form-control form-control-sm" value="<?php  echo date('Y-m-d')?>"  value="{{ $user->next_follow_up_date }}" id="name" name="next_follow_up_date" placeholder="Next Follow Up Date">


                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Call Duration</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->call_duration }}" name="call_duration" placeholder="Enter Call Duration">


                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">

                                                                    <label for="pwd">Call Type</label><br>



                                                                    <label class="radio-inline"><input type="radio" name="call_type" value="Incoming" autocomplete="off" {{ $user->call_type == 'Incoming' ? 'checked':'' }}> Incoming</label>

                                                                <label class="radio-inline"><input type="radio" name="call_type" value="Outgoing" autocomplete="off" {{ $user->call_type == 'checked' ? 'selected':'' }}> Outgoing</label>






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


                                    @if (Auth::guard('admin')->user()->can('pcl_update'))
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
                                                    <th class="border0">Name</th>
                                                    <td class="border0">{{ $user->name }}</td>
                                                    <th class="border0">Phone</th>
                                                    <td class="border0">{{ $user->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Date</th>
                                                    <td>{{ date('d-m-Y', strtotime($user->date))}}</td>
                                                    <th>Next Follow Up Date</th>
                                                    <td>{{ date('d-m-Y', strtotime($user->next_follow_up_date	))}}</td>
                                                </tr>

                                                <tr>
                                                    <th>Call Duration</th>
                                                    <td>{{ $user->call_duration }}</td>
                                                    <th>Call Type</th>
                                                    <td>{{ $user->call_type }}</td>
                                                </tr>

                                                <tr>
                                                    <th>Description</th>
                                                    <td>{{ $user->des }}</td>
                                                    <th>Note</th>
                                                    <td>{{ $user->note }}</td>
                                                </tr>


                                            </tbody>
                                            </table>

                                            </div>
                                        </div><!-- /.modal-content -->
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                    @endif



                                    @if (Auth::guard('admin')->user()->can('pcl_delete'))

                                    <button type="button" class="btn btn-danger btn-sm waves-light waves-effect"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.phone_call_log.delete',$user->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Phone Call Loge</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.phone_call_log.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf




                    <div class="row mt-3">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control-sm" id="name" value="" name="name" placeholder="Enter Name">


                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Phone</label>
                            <input type="text" class="form-control form-control-sm" id="name" value="" name="phone" placeholder="Enter Phone">


                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" value="" name="date" placeholder="Enter Date">


                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">Description</label>
                            <textarea class="form-control form-control-sm" id="name" name="des">

                                    </textarea>
                        </div>
                    </div>



                    <div class="row mt-3">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Next Follow Up Date</label>
                            <input type="date" class="form-control form-control-sm" value="" id="name" name="next_follow_up_date" placeholder="Next Follow Up Date">


                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Call Duration</label>
                            <input type="text" class="form-control form-control-sm" id="name" value="" name="call_duration" placeholder="Enter Call Duration">


                        </div>

                        <div class="form-group col-md-4 col-sm-12">

                                <label for="pwd">Call Type</label><br>



                                <label class="radio-inline"><input type="radio" name="call_type" value="Incoming" autocomplete="off" > Incoming</label>

                            <label class="radio-inline"><input type="radio" name="call_type" value="Outgoing" autocomplete="off" > Outgoing</label>






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
