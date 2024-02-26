@extends('admin.master.master')

@section('title')
Staff Id List | {{ $ins_name }}
@endsection


@section('css')
{{-- <style>

    /* @page {
        margin: 18px;
    } */

    p,
    h5,
    h4,
    h6,
    h3,
    h2 {
        padding: 0;
        margin: 0;
    }

    body {
        /* font-weight: normal;
        font-size: 17px;
        font-family: Poppins sans-serif; */
    }

    .body_container {
        /* height: 210mm;
        width: 297mm; */
    }

    .pdf_body {
        padding: 2%;
    }

    table {
     border-collapse: collapse;
        width: 100%;
    }




    .logo_table tr td:nth-child(1)
    {
        width: 20%;
        text-align: right;
    }

    .logo_table tr td:nth-child(2)
    {
        width: 40%;
        text-align: center;
    }
    .logo_table tr td:nth-child(3)
    {
        width: 20%;
        text-align: center;
    }


    .logo_table img
    {
        height: 80px;
        width: 80px;
    }

    .logo_table tr td h1
    {
        font-size: 35px;
        margin-top:0;
        margin-bottom:0;
        color: darkslateblue;
        font-weight: bold;
    }

    .logo_table tr td h4
    {
        font-size: 16px;
        margin-top:0;
        font-weight: 600;
    }

    .logo_table tr td h3
    {
        font-size: 20px;
        margin-top:0;
        font-weight: 600;
    }

    .first_table tr td h1
    {
        font-size: 30px;
        font-weight: bold;
        text-align: center;
        text-decoration: underline;
    }

    .second_table tr td
    {
        padding-bottom: 10px;
    }

    .second_table tr td:nth-child(1)
    {
        width: 15%;
    }

    .third_table
    {
        border: 1px solid black;
        margin-top: 15px;
    }

    .third_table th
    {
        border: 1px solid black;
        padding: 5px;
    }
    .third_table td
    {
        border: 1px solid black;
        text-align: center;
        padding: 5px;
    }



</style> --}}
@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Staff Id Design Information</h4>

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
                @if (Auth::guard('admin')->user()->can('staff_id_add'))
                <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Design Info
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
                                <th>Template</th>
                                <th>Heading</th>

                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach($staff_card_id as $key=>$all_design_admit)
                            <tr>
                                <td>{{ $key+1 }}</td>

                                <td>{{ $all_design_admit->signature }}</td>

                                <td>{{ $all_design_admit->id_card_title }}</td>



                                <td>


                                    @if (Auth::guard('admin')->user()->can('staff_id_view'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lgee{{ $all_design_admit->id }}"
                                        class="btn btn-success waves-light waves-effect  btn-sm">
                                        <i class="fas fa-eye"></i></button>

                                    <div class="modal fade bs-example-modal-lgee{{ $all_design_admit->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-sm">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">View Staff Id card
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <!--header-->
                                                    <div class="row">
                                                        <?php $institute_list = DB::table('institute_information')->latest()->first();?>

                                                        <div class="col-md-2"
                                                            style="background-color:{{ $all_design_admit->background_image }};color: white;">

                                                            <h1
                                                                style="font-size: 14px;
                                        font-weight: bold; text-transform: uppercase;
                                        writing-mode: vertical-rl;color:{{ $all_design_admit->header_color }};padding-top:106px;">
                                                                {{ $all_design_admit->id_card_title }}</h1>

                                                        </div>
                                                        <div class="col-md-10" style="background-color: #eeeeee;
                                    text-align: center;
                                    padding-top: 10px;
                                    padding-left: 10px;
                                    padding-right: 10px;">


                                                            <div class="row ">
                                                                <div class="col-md-12 text-center">
                                                                    <img src="{{ asset('/') }}{{ $institute_list->logo }}"
                                                                        height="40px" width="40px" alt="">
                                                                    <h4 style="font-size: 15px;">
                                                                        {{ $institute_list->name }}</h4>
                                                                    <h5 style="font-size: 12px;
                                                margin-bottom: 10px;
                                                font-weight: normal;">{{ $institute_list->address }} </h5>



                                                                </div>



                                                                <div class="col-md-12 text-center">
                                                                    @if(empty($all_design_admit->photo))


                                                                    @else
                                                                    <img src="{{ asset('/') }}{{ $institute_list->logo }}"
                                                                        style="border-radius: 4px" alt="" height="70px"
                                                                        width="70px">
                                                                    @endif

                                                                    @if(empty($all_design_admit->name))


                                                                    @else
                                                                    <h2
                                                                        style="font-size: 16px;margin-bottom: 10px;margin-top:5px;">
                                                                        Name</h2>

                                                                    @endif

                                                                    @if(empty($all_design_admit->desi))


                                                                    @else

                                                                    <p style="font-size: 12px"><span
                                                                            style="font-weight: bold;">Designation:
                                                                        </span>
                                                                    </p>
                                                                    @endif


                                                                    @if(empty($all_design_admit->depart))


                                                                    @else

                                                                    <p style="font-size: 12px"><span
                                                                            style="font-weight: bold;">Department:
                                                                        </span>
                                                                    </p>
                                                                    @endif



                                                                    @if(empty($all_design_admit->father_name))


                                                                    @else

                                                                    <p style="font-size: 12px"><span
                                                                            style="font-weight: bold;">Father: </span>
                                                                    </p>
                                                                    @endif


                                                                    @if(empty($all_design_admit->mother_name))


                                                                    @else

                                                                    <p style="font-size: 12px"><span
                                                                            style="font-weight: bold;">Mother: </span>
                                                                    </p>
                                                                    @endif


                                                                    @if(empty($all_design_admit->date_of_birth))


                                                                    @else

                                                                    <p style="font-size: 12px"><span
                                                                            style="font-weight: bold;">Date of Birth:
                                                                        </span></p>
                                                                    @endif


                                                                    @if(empty($all_design_admit->admission_no))


                                                                    @else

                                                                    <p style="font-size: 12px"><span
                                                                            style="font-weight: bold;">Staff ID:
                                                                        </span></p>
                                                                    @endif


                                                                    @if(empty($all_design_admit->address))


                                                                    @else

                                                                    <p style="font-size: 12px"><span
                                                                            style="font-weight: bold;">Address:
                                                                        </span></p>
                                                                    @endif



                                                                    @if(empty($all_design_admit->date_of_joining))


                                                                    @else

                                                                    <p style="font-size: 12px"><span
                                                                            style="font-weight: bold;">Date of Joining:
                                                                        </span>
                                                                    </p>
                                                                    @endif


                                                                    @if(empty($all_design_admit->phone))


                                                                    @else

                                                                    <p style="font-size: 12px"><span
                                                                            style="font-weight: bold;">Phone:
                                                                        </span>
                                                                    </p>
                                                                    @endif


                                                                    <p style="text-align: right; padding-top: 15px">
                                                                        <img src="{{ asset('/') }}{{ $all_design_admit->logo }}"
                                                                            style="height: 13px;" alt=""></p>
                                                                    <p
                                                                        style="text-decoration:underline; text-align: right">
                                                                        Principle</p>


                                                                </div>

                                                            </div>




                                                        </div>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif

                                    @if (Auth::guard('admin')->user()->can('staff_id_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $all_design_admit->id }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $all_design_admit->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Information
                                                    </h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.staff_id_card.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf
                                                        <div class="row">
                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Template</label>
                                                                <input type="text" class="form-control form-control-sm"
                                                                    value="{{ $all_design_admit->signature }}" id="name"
                                                                    name="template" placeholder="Enter Template">
                                                                <input type="hidden"
                                                                    class="form-control form-control-sm"
                                                                    value="{{ $all_design_admit->id }}" id="name"
                                                                    name="id" placeholder="Enter Template">
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Heading</label>
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="name"
                                                                    value="{{ $all_design_admit->id_card_title}}"
                                                                    name="heading" placeholder="Enter Heading">
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Heading Color</label>
                                                                <input type="color" class="form-control form-control-sm"
                                                                    id="name" value="" name="header_color"
                                                                    placeholder="Enter Color"
                                                                    value="{{ $all_design_admit->header_color}}">
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Heading Background Color</label>
                                                                <input type="color" class="form-control form-control-sm"
                                                                    id="name" name="background_image"
                                                                    placeholder="Enter Heading Background Color"
                                                                    value="{{ $all_design_admit->background_image}}">
                                                            </div>


















                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="name">Principle Sign</label>
                                                                <input type="file" class="form-control form-control-sm"
                                                                    id="name" name="logo"
                                                                    placeholder="Enter Principle Sign">
                                                                <img src="{{ asset('/') }}{{$all_design_admit->logo }}"
                                                                    height="20px" />
                                                            </div>













                                                            <hr class="mt-2">


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="name"
                                                                        {{ 1 == $all_design_admit->name ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm"
                                                                        name="father_name"
                                                                        {{ 1 == $all_design_admit->father_name ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Father Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm"
                                                                        name="mother_name"
                                                                        {{ 1 == $all_design_admit->mother_name ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Mother Name</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm"
                                                                        name="date_of_birth"
                                                                        {{ 1 == $all_design_admit->date_of_birth ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Date Of Birth</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm"
                                                                        name="admission_no"
                                                                        {{ 1 == $all_design_admit->admission_no ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Staff ID</label>
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="depart"
                                                                        {{ 1 == $all_design_admit->depart ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Department</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="photo"
                                                                        {{ 1 == $all_design_admit->photo ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Photo</label>
                                                                </div>
                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="phone"
                                                                        {{ 1 == $all_design_admit->phone ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Phone</label>
                                                                </div>
                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="desi"
                                                                        {{ 1 == $all_design_admit->desi ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Designation</label>
                                                                </div>
                                                            </div>
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm" name="address"
                                                                        {{ 1 == $all_design_admit->address ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Address</label>
                                                                </div>
                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <div class="form-check form-switch mb-3" dir="ltr">
                                                                    <input type="checkbox" class="form-check-input"
                                                                        value="1" id="customSwitchsizesm"
                                                                        name="date_of_joining"
                                                                        {{ 1 == $all_design_admit->date_of_joining ? 'checked':''  }}>
                                                                    <label class="form-check-label"
                                                                        for="customSwitchsizesm">Date Of Joining</label>
                                                                </div>
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



                                    @if (Auth::guard('admin')->user()->can('staff_id_delete'))

                                    <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                                        onclick="deleteTag({{ $all_design_admit->id}})" data-toggle="tooltip"
                                        title="Delete"><i class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $all_design_admit->id }}"
                                        action="{{ route('admin.staff_id_card.delete',$all_design_admit->id) }}"
                                        method="POST" style="display: none;">
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Design Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form class="custom-validation" action="{{ route('admin.staff_id_card.store') }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">


                                    <div class="row">
                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Template</label>
                                            <input type="text" class="form-control form-control-sm" id="name"
                                                name="template" placeholder="Enter Template">
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Heading</label>
                                            <input type="text" class="form-control form-control-sm" id="name"
                                                name="heading" placeholder="Enter Heading">
                                        </div>


                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Heading Color</label>
                                            <input type="color" class="form-control form-control-sm" id="name" value=""
                                                name="header_color" placeholder="Enter Color">
                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Heading Background Color</label>
                                            <input type="color" class="form-control form-control-sm" id="name"
                                                name="background_image" placeholder="Enter Printing Date">
                                        </div>


















                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Principle Sign</label>
                                            <input type="file" class="form-control form-control-sm" id="name"
                                                name="logo" placeholder="Enter Principle Sign">
                                        </div>







                                        <hr class="mt-4">


                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="name">
                                                <label class="form-check-label" for="customSwitchsizesm">Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="father_name">
                                                <label class="form-check-label" for="customSwitchsizesm">Father
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="mother_name">
                                                <label class="form-check-label" for="customSwitchsizesm">Mother
                                                    Name</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="date_of_birth">
                                                <label class="form-check-label" for="customSwitchsizesm">Date Of
                                                    Birth</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="admission_no">
                                                <label class="form-check-label" for="customSwitchsizesm">Staff
                                                    ID</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="depart">
                                                <label class="form-check-label"
                                                    for="customSwitchsizesm">Department</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="photo">
                                                <label class="form-check-label" for="customSwitchsizesm">Photo</label>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="phone">
                                                <label class="form-check-label" for="customSwitchsizesm">Phone</label>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="desi">
                                                <label class="form-check-label"
                                                    for="customSwitchsizesm">Designation</label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="address">
                                                <label class="form-check-label" for="customSwitchsizesm">Address</label>
                                            </div>
                                        </div>


                                        <div class="form-group col-md-4 col-sm-12">
                                            <div class="form-check form-switch mb-3" dir="ltr">
                                                <input type="checkbox" class="form-check-input" value="1"
                                                    id="customSwitchsizesm" name="date_of_joining">
                                                <label class="form-check-label" for="customSwitchsizesm">Date Of
                                                    Joining</label>
                                            </div>
                                        </div>

                                    </div>






                                </div>

                            </div>
                        </div>



                        <div class="col-lg-12">
                            <div class="float-right d-none d-md-block">
                                <div class="form-group mb-4">
                                    <div>
                                        <button type="submit"
                                            class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                            Submit
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- end col -->
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
