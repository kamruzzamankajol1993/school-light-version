@extends('admin.master.master')

@section('title')
Expense List | School Management
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Expense Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">School Management</a></li> --}}
                    <li class="breadcrumb-item active">School Management</li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="row">

    <div class="col-sm-6">
        <div class="float-right d-md-block">
            <div class="dropdown">
                @if (Auth::guard('admin')->user()->can('expense_add'))
                <button class="btn btn-sm btn-primary dropdown-toggle waves-effect waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Expense
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
                                <th>Description</th>
                                <th>Invoice Number</th>
                                <th>Date</th>
                                <th>Expense Head</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($expense_details as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>

                                    {{ $user->name}}
                                </td>

                                <td>
                                    {{ $user->des}}
                                </td>

                                <td>
                                    {{ $user->invoice_number}}
                                </td>

                                <td>
                                    {{ date('d-m-Y', strtotime($user->date))}}

                                </td>


                                <td>
                                    {{ $user->expense_head}}
                                </td>


                                <td>
                                    {{ $user->amount}}
                                </td>


                                <td>
                                    @if (Auth::guard('admin')->user()->can('expense_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary btn-sm waves-light waves-effect">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Expense
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.expense.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf



                                                        <div class="row mt-3">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Expense head</label>

                                                                <select name="expense_head" class="form-control form-control-sm">

                                                                    <option>---Please Select---</option>
                                                                    @foreach($expense_head_details as $all_expense)

                                            <option value="{{ $all_expense->expense_head }}" {{ $user->expense_head == $all_expense->expense_head ? 'selected':'' }}>{{ $all_expense->expense_head }}</option>
                                                                    @endforeach
                                                                </select>

                                                                <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $user->id }}" name="id" placeholder="Enter Name">

                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->name }}" name="name" placeholder="Enter Name">


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Invoice Number</label>
                                                                <input type="text" class="form-control form-control-sm" value="{{ $user->invoice_number }}" id="name" name="invoice_number" placeholder="Enter Invoice Number">


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Date</label>
                                                                <input type="date" class="form-control form-control-sm" id="name" value="{{ $user->date }}" name="date" placeholder="Enter Date">


                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Amount</label>
                                                                <input type="number" class="form-control form-control-sm" id="name" value="{{ $user->amount }}" name="amount" placeholder="Enter Amount">


                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Attach Document</label>
                                                                <input type="file" class="form-control form-control-sm" id="name" name="doc" placeholder="Enter Date">


                                                            </div>

                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Description</label>
                                                                <textarea class="form-control form-control-sm" id="name" name="des">
                                                                   {{ $user->des }}
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






                                    @if (Auth::guard('admin')->user()->can('expense_delete'))

                                    <button type="button" class="btn btn-danger btn-sm waves-light waves-effect"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.expense.delete',$user->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Expense</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.expense.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf




                    <div class="row mt-3">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Expense head</label>

                            <select name="expense_head" class="form-control form-control-sm">

                                <option>---Please Select---</option>
                                @foreach($expense_head_details as $all_expense)

        <option value="{{ $all_expense->expense_head }}" >{{ $all_expense->expense_head }}</option>
                                @endforeach
                            </select>



                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control-sm" id="name"  name="name" placeholder="Enter Name">


                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Invoice Number</label>
                            <input type="text" class="form-control form-control-sm"  id="name" name="invoice_number" placeholder="Enter Invoice Number">


                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" value="<?php echo date('Y-m-d')?>"  name="date" placeholder="Enter Date">


                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Amount</label>
                            <input type="number" class="form-control form-control-sm" id="name"  name="amount" placeholder="Enter Amount">


                        </div>


                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Attach Document</label>
                            <input type="file" class="form-control form-control-sm" id="name" name="doc" placeholder="Enter Date">


                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">Description</label>
                            <textarea class="form-control form-control-sm" id="name" name="des">

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
