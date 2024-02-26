@extends('admin.master.master')

@section('title')
Staff Member List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Staff Member Information</h4>

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
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;font-size:13px;">
                        <thead>
                            <tr>
                                <th>Member Id</th>
                                <th>Library Card No</th>
                                <th>Staff Name</th>
                                <th>Email</th>
                                <th>Date Of Birth</th>
                                <th>Phone</th>
                               <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($member_list as $user)


                            @if($user->	library_card_status == 1)

                            <tr style="background-color: #dff0d8;">

                                @else
                                <tr>

                                @endif
                                <td>


                                    {{ $user->staff_id }}




                                </td>
                                <td>

                                    {{ $user->library_id }}
                                </td>

                                <td>
                                    {{ $user->first_name.''.$user->last_name}}
                                </td>

                                <td>
                                    {{ $user->email }}
                                </td>

                                <td>
                                    {{ date('d-m-Y', strtotime($user->date_of_birth))}}

                                </td>

                                <td>
                                    {{ $user->phone }}
                                </td>




                                <td>
                                    @if($user->	library_card_status == 0)
                                    @if (Auth::guard('admin')->user()->can('add_member_to_library'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary btn-sm waves-light waves-effect">
                                        <i class="fas fa-plus"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Add Library Card No</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('add_member_to_library_save') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf



                                                        <div class="row ">
                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="name">Library Card No</label>
                                                                <input type="text" class="form-control form-control-sm" id="name"  name="card_no" placeholder="Enter To Card Number">
                                                                <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $user->id }}" name="id" placeholder="Enter Name">

                                                            </div>


                                                        </div>









                                                        <button type="submit"
                                                            class="btn btn-primary mt-4 pr-4 pl-4">Add</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif


@else


                                    @if (Auth::guard('admin')->user()->can('remove_member_to_library'))

                                    <button type="button" class="btn btn-danger btn-sm waves-light waves-effect"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('remove_member_to_library_save',$user->id) }}" method="POST"
                                        style="display: none;">
                                        @method('DELETE')
                                        @csrf

                                    </form>
                                    @endif
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
            confirmButtonText: 'Yes, Remove it!',
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
