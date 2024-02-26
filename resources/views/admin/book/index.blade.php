@extends('admin.master.master')

@section('title')
Book List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Book Information</h4>

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
                @if (Auth::guard('admin')->user()->can('book_add'))
                <button class="btn btn-sm btn-primary dropdown-toggle waves-effect waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Book
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
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;font-size:13px;">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Book Title</th>
                                <th>Description</th>
                                <th>Book Number</th>
                                <th>ISBN Number</th>
                                <th>Publisher</th>
                                <th>Author</th>
                                <th>Subject</th>
                                <th>Rack Number</th>
                                <th>Qty</th>
                                <th>Avaiable</th>
                                <th>Book Price</th>
                                <th>Post Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($book_list as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>

                                    {{ $user->book_title }}
                                </td>

                                <td>
                                    {{ $user->des	 }}
                                </td>

                                <td>
                                    {{ $user->book_number }}
                                </td>

                                <td>
                                    {{ $user->isbn_number }}
                                </td>

                                <td>
                                    {{ $user->publisher }}
                                </td>

                                <td>
                                    {{ $user->author }}
                                </td>
                                <td>
                                    {{ $user->subject }}
                                </td>
                                <td>
                                    {{ $user->rack_number }}
                                </td>
                                <td>
                                    {{ $user->quantity }}
                                </td>
                                <td>
                                    {{ $user->available_quantity }}
                                </td>
                                <td>
                                    {{ $user->book_price }}
                                </td>
                                <td>
                                    {{ date('d-m-Y', strtotime($user->post_date))}}

                                </td>


                                <td>
                                    @if (Auth::guard('admin')->user()->can('book_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary btn-sm waves-light waves-effect">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Book
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.book.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf



                                                        <div class="row mt-3">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Book Title</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->book_title }}" name="book_title" placeholder="Enter To Book Title">
                                                                <input type="hidden" class="form-control form-control-sm" id="name" value="{{ $user->id }}" name="id" placeholder="Enter Name">

                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Book Number</label>
                                                                <input type="text" class="form-control form-control-sm" id="name" value="{{ $user->book_number }}" name="book_number" placeholder="Enter Book Number">


                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">ISBN Number</label>
                                                                <input type="text" class="form-control form-control-sm" value="{{ $user->isbn_number }}" id="name" name="isbn_number" placeholder="Enter ISBN Number">


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Publisher</label>
                                                                <input type="text" class="form-control form-control-sm" value="{{ $user->publisher }}" id="name" name="publisher" placeholder="Enter Publisher">


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Author</label>
                                                                <input type="text" class="form-control form-control-sm" value="{{ $user->author }}" id="name" name="author" placeholder="Enter Author">


                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Subject</label>
                                                                <input type="text" class="form-control form-control-sm" value="{{ $user->subject }}" id="name" name="subject" placeholder="Enter Subject">


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Rack Number</label>
                                                                <input type="text" class="form-control form-control-sm" value="{{ $user->rack_number }}" id="name" name="rack_number" placeholder="Enter Rack Number">


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Quantity</label>
                                                                <div class="input-group">
                                                                    <div class="input-group-text"><select class="form-control form-control-sm" name="symbol" autocomplete="off">
                                                                        <option value="p">+</option>
                                                                        <option value="m">-</option>
                                                                    </select></div>
                                                                    <input type="number" class="form-control form-control-sm" id="specificSizeInputGroupUsername" value="{{ $user->quantity }}" id="name" name="quantity" placeholder="Enter Quantity">
                                                                  </div>



                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Book Price</label>
                                                                <input type="text" class="form-control form-control-sm" value="{{ $user->book_price }}" id="name" name="book_price" placeholder="Enter Book Price">


                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Date</label>
                                                                <input type="date" class="form-control form-control-sm" id="name" value="{{ $user->post_date }}" name="post_date" placeholder="Enter Date">


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





                                    @if (Auth::guard('admin')->user()->can('book_delete'))

                                    <button type="button" class="btn btn-danger btn-sm waves-light waves-effect"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.book.delete',$user->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Book </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.book.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf




                    <div class="row mt-3">
                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Book Title</label>
                            <input type="text" class="form-control form-control-sm" id="name"  name="book_title" placeholder="Enter To Book Title">


                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Book Number</label>
                            <input type="text" class="form-control form-control-sm" id="name"  name="book_number" placeholder="Enter Book Number">


                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">ISBN Number</label>
                            <input type="text" class="form-control form-control-sm"  id="name" name="isbn_number" placeholder="Enter ISBN Number">


                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Publisher</label>
                            <input type="text" class="form-control form-control-sm"  id="name" name="publisher" placeholder="Enter Publisher">


                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Author</label>
                            <input type="text" class="form-control form-control-sm"  id="name" name="author" placeholder="Enter Author">


                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Subject</label>
                            <input type="text" class="form-control form-control-sm"  id="name" name="subject" placeholder="Enter Subject">


                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Rack Number</label>
                            <input type="text" class="form-control form-control-sm"  id="name" name="rack_number" placeholder="Enter Rack Number">


                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Quantity</label>
                            <input type="number" class="form-control form-control-sm"  id="name" name="quantity" placeholder="Enter Quantity">


                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Book Price</label>
                            <input type="text" class="form-control form-control-sm"  id="name" name="book_price" placeholder="Enter Book Price">


                        </div>


                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Date</label>
                            <input type="date" class="form-control form-control-sm" id="name"  name="post_date" placeholder="Enter Date">


                        </div>



                        <div class="form-group col-md-12 col-sm-12">
                            <label for="password">Description</label>
                            <textarea class="form-control form-control-sm" id="name" name="des">

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
