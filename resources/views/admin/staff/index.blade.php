
@extends('admin.master.master')

@section('title')
Staff List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<?php use App\Http\Controllers\SectionController;


?>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Staff Information</h4>

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
                @if (Auth::guard('admin')->user()->can('staff_add'))
                <a class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    href="{{ route('admin.staff.create') }}">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Staff
                </a>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- end page title -->

<div class="row mt-3">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('flash_message')

                @if($count_vlue == 1)

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>










                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>








                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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
                @elseif($count_vlue == 2)



                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>

                                <th>{{ $second_value }}</th>










                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>

                                <td>{{ $newss->$second_value }}</td>









                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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


                @elseif($count_vlue == 3)

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>

                                <th>{{ $second_value }}</th>

                                <th>{{ $third_value }}</th>








                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>

                                <td>{{ $newss->$second_value }}</td>

                                <td>{{ $newss->$third_value }}</td>







                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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

                @elseif($count_vlue == 4)

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>

                                <th>{{ $second_value }}</th>

                                <th>{{ $third_value }}</th>

                                <th>{{ $fourth_value }}</th>






                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>

                                <td>{{ $newss->$second_value }}</td>

                                <td>{{ $newss->$third_value }}</td>

                                <td>{{ $newss->$fourth_value }}</td>





                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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

                @elseif($count_vlue == 5)

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>

                                <th>{{ $second_value }}</th>

                                <th>{{ $third_value }}</th>

                                <th>{{ $fourth_value }}</th>

                                <th>{{ $fifth_value }}</th>





                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>

                                <td>{{ $newss->$second_value }}</td>

                                <td>{{ $newss->$third_value }}</td>

                                <td>{{ $newss->$fourth_value }}</td>

                                <td>{{ $newss->$fifth_value }}</td>




                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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

                @elseif($count_vlue == 6)

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>

                                <th>{{ $second_value }}</th>

                                <th>{{ $third_value }}</th>

                                <th>{{ $fourth_value }}</th>

                                <th>{{ $fifth_value }}</th>

                                <th>{{ $sixth_value }}</th>




                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>

                                <td>{{ $newss->$second_value }}</td>

                                <td>{{ $newss->$third_value }}</td>

                                <td>{{ $newss->$fourth_value }}</td>

                                <td>{{ $newss->$fifth_value }}</td>

                                <td>{{ $newss->$sixth_value }}</td>




                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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

                @elseif($count_vlue == 7)

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>

                                <th>{{ $second_value }}</th>

                                <th>{{ $third_value }}</th>

                                <th>{{ $fourth_value }}</th>

                                <th>{{ $fifth_value }}</th>

                                <th>{{ $sixth_value }}</th>
                                <th>{{ $seventh_value }}</th>




                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>

                                <td>{{ $newss->$second_value }}</td>

                                <td>{{ $newss->$third_value }}</td>

                                <td>{{ $newss->$fourth_value }}</td>

                                <td>{{ $newss->$fifth_value }}</td>

                                <td>{{ $newss->$sixth_value }}</td>
                                <td>{{ $newss->$seventh_value }}</td>




                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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

                @elseif($count_vlue == 8)

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>

                                <th>{{ $second_value }}</th>

                                <th>{{ $third_value }}</th>

                                <th>{{ $fourth_value }}</th>

                                <th>{{ $fifth_value }}</th>

                                <th>{{ $sixth_value }}</th>
                                <th>{{ $seventh_value }}</th>
                                <th>{{ $eight_value }}</th>




                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>

                                <td>{{ $newss->$second_value }}</td>

                                <td>{{ $newss->$third_value }}</td>

                                <td>{{ $newss->$fourth_value }}</td>

                                <td>{{ $newss->$fifth_value }}</td>

                                <td>{{ $newss->$sixth_value }}</td>
                                <td>{{ $newss->$seventh_value }}</td>
                                <td>{{ $newss->$eight_value }}</td>




                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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

                @elseif($count_vlue == 9)


                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>

                                <th>{{ $second_value }}</th>

                                <th>{{ $third_value }}</th>

                                <th>{{ $fourth_value }}</th>

                                <th>{{ $fifth_value }}</th>

                                <th>{{ $sixth_value }}</th>
                                <th>{{ $seventh_value }}</th>
                                <th>{{ $eight_value }}</th>
                                <th>{{ $ninth_value }}</th>



                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>

                                <td>{{ $newss->$second_value }}</td>

                                <td>{{ $newss->$third_value }}</td>

                                <td>{{ $newss->$fourth_value }}</td>

                                <td>{{ $newss->$fifth_value }}</td>

                                <td>{{ $newss->$sixth_value }}</td>
                                <td>{{ $newss->$seventh_value }}</td>
                                <td>{{ $newss->$eight_value }}</td>
                                <td>{{ $newss->$ninth_value }}</td>



                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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



                @elseif($count_vlue == 10)


                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>

                                <th>{{ $first_value }}</th>

                                <th>{{ $second_value }}</th>

                                <th>{{ $third_value }}</th>

                                <th>{{ $fourth_value }}</th>

                                <th>{{ $fifth_value }}</th>

                                <th>{{ $sixth_value }}</th>
                                <th>{{ $seventh_value }}</th>
                                <th>{{ $eight_value }}</th>
                                <th>{{ $ninth_value }}</th>
                                <th>{{ $tenth_value }}</th>


                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>


                            @foreach($test_student as $key=>$newss)
                            <tr>
                                <td>


                                    {{ $key+1 }}




                                </td>
                                <td>




                                    {{ $newss->$first_value }}



                                </td>

                                <td>{{ $newss->$second_value }}</td>

                                <td>{{ $newss->$third_value }}</td>

                                <td>{{ $newss->$fourth_value }}</td>

                                <td>{{ $newss->$fifth_value }}</td>

                                <td>{{ $newss->$sixth_value }}</td>
                                <td>{{ $newss->$seventh_value }}</td>
                                <td>{{ $newss->$eight_value }}</td>
                                <td>{{ $newss->$ninth_value }}</td>
                                <td>{{ $newss->$tenth_value }}</td>


                                <td>
                                    @if (Auth::guard('admin')->user()->can('staff_view'))

                                    <a type="button" href="{{ route('admin.staff.view',$newss->id) }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-eye"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_update'))

                                    <a type="button" href="{{ route('admin.staff.edit',$newss->id) }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm" >
                                        <i class="fas fa-pencil-alt"></i></a>

                                    @endif
                                    @if (Auth::guard('admin')->user()->can('staff_delete'))

                                    <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $newss->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                        <form id="delete-form-{{ $newss->id }}" action="{{ route('admin.staff.delete',$newss->id) }}" method="POST" style="display: none;">
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

@endif




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
    $("select[name='class_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('department_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='department_id'").html('');
                $("select[name='department_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='class_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('section_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='section_id'").html('');
                $("select[name='section_id'").html(data.options);
            }
        });
    });

</script>
<script type="text/javascript">
    $("select[name='department_id']").change(function () {
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('dpsection_search') }}",
            method: 'POST',
            data: {
                id_country: id_country,
                _token: token
            },
            success: function (data) {
                $("select[name='section_id'").html('');
                $("select[name='section_id'").html(data.options);
            }
        });
    });

</script>
@endsection
