@extends('admin.master.master')

@section('title')
Item Supplier List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Item Supplier  Information</h4>

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
                                @if (Auth::guard('admin')->user()->can('item_supplier_add'))
<button class="btn btn-primary dropdown-toggle waves-effect  btn-sm  btn-sm waves-light" type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add New Item Supplier
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
                                    <th>Item Supplier</th>
                                    <th>Contact Person</th>
                                    <th>Address</th>
                                    <th>Description</th>

                                    <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($item_supplier_list as $user)


                                <tr>
                                   <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>

{{ $user->name }}<br>
<i class="uil-outgoing-call">{{ $user->phone }}</i><br>
<i class="uil-envelopes">{{ $user->email }}</i>

                                </td>

                                <td>

                                    <i class="uil-user">{{ $user->contact_person_name }}</i><br>
                                        <i class="uil-outgoing-call"> {{ $user->contact_person_phone	 }}</i><br>
                                            <i class="uil-envelopes"> {{ $user->contact_person_email }}</i>
                                                                    </td>

                                                                    <td>




                                                                        {{ $user->address }}



                                                                                                          </td>

                                    <td>




  {{ $user->des }}



                                    </td>


                                    <td>
                                      @if (Auth::guard('admin')->user()->can('item_supplier_update'))
                                          <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm  btn-sm" >
                                          <i class="fas fa-pencil-alt"></i></button>

                                          <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Item Supplier   Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.item_supplier.update') }}" method="POST" enctype="multipart/form-data">

                                                        @csrf

                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="name">Name</label>
                                                <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter Name" value="{{ $user->name }}">

                                                <input type="hidden" class="form-control form-control-sm" id="name" name="id" placeholder="Enter Name" value="{{ $user->id }}">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="name">Phone</label>
                                                <input type="text" class="form-control form-control-sm" id="name" name="phone" placeholder="Enter Phone" value="{{ $user->phone }}">


                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="name">Email</label>
                                                <input type="email" class="form-control form-control-sm" id="name" name="email" placeholder="Enter Email" value="{{ $user->email }}">


                                                            </div>

                                                             <div class="form-group col-md-6 col-sm-6">
                                                                <label for="password">Address</label>
                                                                <textarea class="form-control form-control-sm" id="name"
                                                                name="address">
                                                                {{ $user->address}}
                                                            </textarea>
                                                            </div>
                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="name">Contact Person Name</label>
                                                <input type="text" class="form-control form-control-sm" id="name" name="contact_person_name" placeholder="Enter Contact Person Name" value="{{ $user->contact_person_name }}">


                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="name">Contact Person Phone</label>
                                                <input type="text" class="form-control form-control-sm" id="name" name="contact_person_phone" placeholder="Enter Contact Person Phone" value="{{ $user->contact_person_phone }}">


                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-6">
                                                                <label for="name">Contact Person Email</label>
                                                <input type="email" class="form-control form-control-sm" id="name" name="contact_person_email" placeholder="Enter Contact Person Email" value="{{ $user->contact_person_email }}">


                                                            </div>

                                                             <div class="form-group col-md-6 col-sm-6">
                                                                <label for="password">Description</label>
                                                                <textarea class="form-control form-control-sm" id="name"
                                                                name="des">
                                                                {{ $user->des}}
                                                            </textarea>
                                                            </div>
                                                        </div>





                                                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                                                    </form>
                                                </div>

                                              </div>
                                            </div>
                                          </div>
@endif



                                  @if (Auth::guard('admin')->user()->can('item_supplier_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.item_supplier.delete',$user->id) }}" method="POST" style="display: none;">
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Item Supplier </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
                        <div class="modal-body">
                            <form action="{{ route('admin.item_supplier.store') }}" method="POST" enctype="multipart/form-data">

                                @csrf

                                <div class="row">
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="name">Name</label>
                        <input type="text" class="form-control form-control-sm" id="name" name="name" placeholder="Enter Name" value="">


                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="name">Phone</label>
                        <input type="text" class="form-control form-control-sm" id="name" name="phone" placeholder="Enter Phone" >


                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="name">Email</label>
                        <input type="email" class="form-control form-control-sm" id="name" name="email" placeholder="Enter Email" >


                                    </div>

                                     <div class="form-group col-md-6 col-sm-6">
                                        <label for="password">Address</label>
                                        <textarea class="form-control form-control-sm" id="name"
                                        name="address">

                                    </textarea>
                                    </div>
                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="name">Contact Person Name</label>
                        <input type="text" class="form-control form-control-sm" id="name" name="contact_person_name" placeholder="Enter Contact Person Name" >


                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="name">Contact Person Phone</label>
                        <input type="text" class="form-control form-control-sm" id="name" name="contact_person_phone" placeholder="Enter Contact Person Phone" >


                                    </div>

                                    <div class="form-group col-md-6 col-sm-6">
                                        <label for="name">Contact Person Email</label>
                        <input type="email" class="form-control form-control-sm" id="name" name="contact_person_email" placeholder="Enter Contact Person Email" >


                                    </div>

                                     <div class="form-group col-md-6 col-sm-6">
                                        <label for="password">Description</label>
                                        <textarea class="form-control form-control-sm" id="name"
                                        name="des">

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







