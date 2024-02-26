@extends('admin.master.master')

@section('title')
Issue Item List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Issue Item Information</h4>

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
                @if (Auth::guard('admin')->user()->can('issue_item_add'))
                <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Issue New Item
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
                                <th> Item </th>
                                <th> Item Category</th>
                                <th> Issue-Return</th>
                                <th> Issue To</th>
                                <th> Issued By</th>
                                <th> Quantity </th>
                                <th> Status</th>
                                 <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($item_issue_details as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>

                                <td>

                                    <?php  $cat_name1 = DB::table('items')->where('id',$user->item)->value('name');?>


                                    {{ $cat_name1 }}



                                </td>

                                <td>

                                    <?php  $cat_name = DB::table('item_categories')->where('id',$user->item_category)->value('name');?>


                                    {{ $cat_name }}



                                </td>
                                <td>{{ $user->issue_date }} - {{ $user->return_date }}</td>
                                <td>

                                    <?php  $cat_name2 = DB::table('admins')->where('id',$user->issue_to)->value('name');?>


                                    {{ $cat_name2 }}



                                </td>

                                <td>

                                    <?php  $cat_name3 = DB::table('admins')->where('id',$user->issue_by)->value('name');?>


                                    {{ $cat_name3 }}



                                </td>

                                <td>




                                    {{ $user->quantity }}



                                </td>

                                <td>


@if($user->status == 'Returned')

Returned
@else

@if (Auth::guard('admin')->user()->can('issue_item_update'))
<button type="button" data-bs-toggle="modal"
    data-bs-target=".bs-example-modal-lg{{ $user->id }}"
    class="btn btn-warning waves-light waves-effect  btn-sm  btn-sm">
    Click here to Return</button>


    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirm Return</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to return this item !</p>
                    <table class="table table-bordered dt-responsive nowrap"
                    style="border-collapse: collapse; border-spacing: 0;">
                        <tr>
                            <td>Item</td>

                            <td> <?php  $cat_name1 = DB::table('items')->where('id',$user->item)->value('name');?>


                                {{ $cat_name1 }}</td>

                        </tr>
                        <tr>

                            <td>Item Category</td>

                            <td> <?php  $cat_name = DB::table('item_categories')->where('id',$user->item_category)->value('name');?>


                                {{ $cat_name }}</td>
                        </tr>

                        <tr>


                            <td>Item Quantity</td>

                            <td>{{ $user->quantity }}</td>
                        </tr>
                    </table>
                    <form action="{{ route('admin.issue_item.update') }}" method="POST"
                        enctype="multipart/form-data">

                        @csrf

                        <div class="row">

                            <div class="form-group col-md-12 col-sm-12">

                                    <input type="hidden" class="form-control form-control-sm" id="name" name="id" value="{{ $user->id }}"
                                    placeholder="Enter Quantity">
                                    <input type="hidden" class="form-control form-control-sm" id="name" name="quantity" value="{{ $user->quantity }}"
                                    placeholder="Enter Quantity">
                            </div>




                        </div>





                        <button type="submit"
                            class="btn btn-success mt-4 pr-4 pl-4">Return</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

   @endif

   @endif

                                </td>





                                <td>







                                    @if (Auth::guard('admin')->user()->can('issue_item_delete'))

                                    <button type="button"
                                        class="btn btn-danger waves-light waves-effect  btn-sm  btn-sm"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.issue_item.delete',$user->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel"> Issue Item </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.issue_item.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="row">

                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">User Type</label>
<select class="form-control form-control-sm" name="user_type">
<option>---- Select Type ----</option>
@foreach($roles as $all_category)
<option value="{{ $all_category->id }}">{{ $all_category->name }}</option>

@endforeach
</select>


                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">Issue to</label>
                            <select name="issue_to" class="form-control form-control-sm">

                            </select>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">Issue By</label>
                            <select name="issue_by" class="form-control form-control-sm">
                                <option>---- Select  ----</option>
                                @foreach($admin_list as $all_category)
                                <option value="{{ $all_category->id }}">{{ $all_category->name }}</option>

                                @endforeach
                            </select>
                        </div>


                        <div class="form-group col-md-12 col-sm-12">
                            <label for="name">Issue Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" name="issue_date"
                                placeholder="Enter Purchase Price">


                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <label for="name"> Return Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" name="return_date"
                                placeholder="Enter Date">


                        </div>



                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">Note</label>
                            <textarea class="form-control form-control-sm" id="name" name="note">

                                    </textarea>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">Item Category</label>
<select class="form-control form-control-sm" name="item_category">
<option>---- Select Category ----</option>
@foreach($item_category_details as $all_category)
<option value="{{ $all_category->id }}">{{ $all_category->name }}</option>

@endforeach
</select>


                        </div>
                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">Item Name</label>
                            <select name="item" class="form-control form-control-sm">

                            </select>
                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <label for="name">Quantity <span id="qu" class="text-danger" style="padding-left: 5px;"></span></label>
                            <input type="number" class="form-control form-control-sm" id="name" name="quantity"
                                placeholder="Enter Quantity">


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
<script type="text/javascript">
    $("select[name='item_category']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('item_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='item'").html('');
                $("select[name='item'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='item']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('quantity_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                console.log(data.options);
                $("#qu").html(data.options);

            }
        });
    });

</script>

<script type="text/javascript">
    $("select[name='user_type']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('user_list_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                console.log(data.options);
                $("select[name='issue_to'").html('');
                $("select[name='issue_to'").html(data.options);

            }
        });
    });

</script>

@endsection
