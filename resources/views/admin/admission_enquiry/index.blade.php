@extends('admin.master.master')

@section('title')
Admission Enquiry List | {{ $ins_name }}
@endsection


@section('css')
<style>
    ul.timeline {
        list-style-type: none;
        position: relative;
    }

    ul.timeline:before {
        content: ' ';
        background: #d4d9df;
        display: inline-block;
        position: absolute;
        left: 29px;
        width: 2px;
        height: 100%;
        z-index: 400;
    }

    ul.timeline>li {
        margin: 20px 0;
        padding-left: 20px;
    }

    ul.timeline>li:before {
        content: ' ';
        background: white;
        display: inline-block;
        position: absolute;
        border-radius: 50%;
        border: 3px solid #22c0e8;
        left: 20px;
        width: 20px;
        height: 20px;
        z-index: 400;
    }

</style>
@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Admission Enquiry Information</h4>

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
                @if (Auth::guard('admin')->user()->can('ae_create'))
                <button class="btn btn-sm btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add Admission Enquiry
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
                                <th> Name</th>
                                <th> Phone</th>
                                <th>Source</th>
                                <th>Enquiry Date</th>
                                <th>Last Follow Up Date</th>
                                <th>Next Follow Up Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($admission_details as $user)


                            <tr>
                                <td>


                                    {{ $loop->index+1 }}




                                </td>
                                <td>

                                    {{ $user->name }}
                                </td>

                                <td>
                                    {{ $user->phone }}
                                </td>

                                <td>
                                    {{ $user->source }}
                                </td>

                                <td>
                                    {{ date('d-m-Y', strtotime($user->date))}}

                                </td>

                                <td>

                                    @if(empty($user->last_follow_up_date))

                                    @else
                                    {{ date('d-m-Y', strtotime($user->last_follow_up_date))}}
                                    @endif

                                </td>

                                <td>
                                    {{ date('d-m-Y', strtotime($user->next_follow_up_date))}}

                                </td>

                                <td>
                                    {{ $user->status }}
                                </td>
                                <td>
                                    @if (Auth::guard('admin')->user()->can('ae_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                        class="btn btn-primary btn-sm waves-light waves-effect  btn-sm">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update Admission
                                                        Enquiry</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('admin.admission_enquiry.update') }}"
                                                        method="POST" enctype="multipart/form-data">

                                                        @csrf

                                                        <div class="row mt-3">
                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Name</label>
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="name" value="{{ $user->name }}" name="name"
                                                                    placeholder="Enter Name">
                                                                <input type="hidden"
                                                                    class="form-control form-control-sm" id="name"
                                                                    value="{{ $user->id }}" name="id"
                                                                    placeholder="Enter Name">

                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Phone</label>
                                                                <input type="text" class="form-control form-control-sm"
                                                                    id="name" value="{{ $user->phone }}" name="phone"
                                                                    placeholder="Enter Phone">


                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Email</label>
                                                                <input type="email" class="form-control form-control-sm"
                                                                    id="name" value="{{ $user->email }}" name="email"
                                                                    placeholder="Enter Email">


                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Address</label>
                                                                <textarea class="form-control form-control-sm" id="name"
                                                                    name="address">
                                                                   {{ $user->address }}
                                                                        </textarea>
                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Description</label>
                                                                <textarea class="form-control form-control-sm" id="name"
                                                                    name="des">
                                                                   {{ $user->des }}
                                                                        </textarea>
                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="password">Note</label>
                                                                <textarea class="form-control form-control-sm" id="name"
                                                                    name="note">
                                                                   {{ $user->note }}
                                                                        </textarea>
                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Date</label>
                                                                <input type="date" class="form-control form-control-sm"
                                                                    id="name" value="{{ $user->date }}" name="date"
                                                                    placeholder="Enter Date">


                                                            </div>


                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Next Follow Up Date</label>
                                                                <input type="date" class="form-control form-control-sm"
                                                                    id="name" value="{{ $user->next_follow_up_date }}"
                                                                    name="next_follow_up_date"
                                                                    placeholder="Enter Next Follow Up Date">


                                                            </div>

                                                            <div class="form-group col-md-4 col-sm-12">
                                                                <label for="name">Assigned</label>
                                                                <select class="form-control form-control-sm"
                                                                    name="assigned">
                                                                    <option value="">----Please Select ----</option>
                                                                    @foreach($user_list as $all_type)

                                                                    <option value="{{ $all_type->name }}"
                                                                        {{ $all_type->name == $user->assigned ? 'selected':'' }}>
                                                                        {{ $all_type->name }}</option>

                                                                    @endforeach
                                                                </select>


                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="form-group col-md-3 col-sm-12">
                                                                <label for="name">Reference</label>
                                                                <select class="form-control form-control-sm"
                                                                    name="refrence">
                                                                    <option value="">----Please Select ----</option>
                                                                    @foreach($reference_details as $all_type)

                                                                    <option value="{{ $all_type->name }}"
                                                                        {{ $all_type->name == $user->refrence ? 'selected':'' }}>
                                                                        {{ $all_type->name }}</option>

                                                                    @endforeach
                                                                </select>


                                                            </div>


                                                            <div class="form-group col-md-3 col-sm-12">
                                                                <label for="name">Source</label>
                                                                <select class="form-control form-control-sm"
                                                                    name="source">
                                                                    <option value="">----Please Select ----</option>
                                                                    @foreach($source_details as $all_type)

                                                                    <option value="{{ $all_type->name }}"
                                                                        {{ $all_type->name == $user->source ? 'selected':'' }}>
                                                                        {{ $all_type->name }}</option>

                                                                    @endforeach
                                                                </select>


                                                            </div>


                                                            <div class="form-group col-md-3 col-sm-12">
                                                                <label for="name">Class</label>
                                                                <select class="form-control form-control-sm"
                                                                    name="class">
                                                                    <option value="">----Please Select ----</option>
                                                                    @foreach($class_details as $all_type)

                                                                    <option value="{{ $all_type->name }}"
                                                                        {{ $all_type->name == $user->class ? 'selected':'' }}>
                                                                        {{ $all_type->name }}</option>

                                                                    @endforeach
                                                                </select>


                                                            </div>
                                                            <div class="form-group col-md-3 col-sm-12">
                                                                <label for="name">Number of Child</label>
                                                                <input type="text" class="form-control form-control-sm"
                                                                    value="{{ $user->number_of_child }}" id="name"
                                                                    name="number_of_child" placeholder="Enter Number">


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


                                    @if (Auth::guard('admin')->user()->can('ae_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-xl{{ $user->id }}"
                                        class="btn btn-info btn-sm waves-light waves-effect  btn-sm">
                                        <i class="uil-outgoing-call"></i></button>

                                    <!--  Small modal example -->
                                    <div class="modal fade bs-example-modal-xl{{ $user->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myExtraLargeModalLabel">Detail
                                                        Information</h5>


                                                    <button type="button" id="last_close_value" class="btn-close"
                                                        aria-label="Close">
                                                    </button>


                                                </div>
                                                <div class="modal-body">

                                                    <div class="row ">
                                                        <div class="col-lg-8 col-md-8 col-sm-8 ">
                                                            <!-- general form elements -->



                                                                <div class="row">
                                                                    <div id="message1"></div>
                                                                    <div class="form-group col-md-6 col-sm-12">
                                                                        <label for="name">Follow Up Date</label>
                                                                        <input type="date"
                                                                            class="form-control form-control-sm"
                                                                            id="fud_value"
                                                                            value="{{ $user->date }}"
                                                                            name="follow_up_date"
                                                                            placeholder="Enter Date">
                                                                        <input type="hidden"
                                                                            class="form-control form-control-sm"
                                                                            id="name" value="{{ $user->id }}" name="id"
                                                                            placeholder="Enter Name">

                                                                    </div>

                                                                    <div class="form-group col-md-6 col-sm-12">
                                                                        <label for="name">Next Follow Up Date</label>
                                                                        <input type="date"
                                                                            class="form-control form-control-sm"
                                                                            id="nfud_value"
                                                                            value="<?php  echo date('Y-m-d')?>"
                                                                            name="next_follow_up_date"
                                                                            placeholder="Enter Phone">


                                                                    </div>




                                                                    <div class="form-group col-md-6 col-sm-12">
                                                                        <label for="password">Response</label>
                                                                        <textarea class="form-control form-control-sm"
                                                                            id="response_value" name="response">

                                                                    </textarea>
                                                                    </div>

                                                                    <div class="form-group col-md-6 col-sm-12">
                                                                        <label for="password">Note</label>
                                                                        <textarea class="form-control form-control-sm"
                                                                            id="note_value" name="note">

                                                                    </textarea>
                                                                    </div>
                                                                </div>

                                        <button id="new_submit_button{{ $user->id }}"
                                                                    class="btn btn-primary mt-4 pr-4 pl-4">Saves</button>



                                                            <!--table part --->


                                                                <div class="row">
                                                                    <div class="col-md-12 " id="submit_list_new">


                                                                    </div>
                                                                        <div class="col-md-12 " id="normal_list">
                                                                        <ul class="timeline" >

                                                                            <?php
                                                                               $detail_enquiry = DB::table('followup_details')->where('en_id',$user->id)->get();

//dd(count($detail_enquiry));
                                                                                ?>

                                                                            @if(count($detail_enquiry) == 0)



                                                                            @else

                                                                            @foreach($detail_enquiry as $new_enquiry)
                                                                            <li>

                                                                                <a href="#" class="float-right">{{ date('d-m-Y', strtotime($new_enquiry->follow_up_date))}}</a>
                                                                                <span>
                                                                                    <a href="{{ route('admission_enquiry_detail_delete',$new_enquiry->id) }}" class="btn btn-sm btn-outline-danger py-0" style="font-size: 0.8em;" id="deleteCompany" data-id="{{ $new_enquiry->id }}">
                                                                                        Delete
                                                                                     </a>
                                                                                </span>
                                                                                <h4>{{ $user->creator_name }}</h4>
                                                                                <h5>{{ $new_enquiry->response }}</h5>
                                                                                <h6>{{ $new_enquiry->note }}</h6>
                                                                            </li>
@endforeach
                                                                            @endif

                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                            <!--end table part -->

                                                        </div>
                                                        <!--/.col (left) -->
                                                        <div class="col-lg-4 col-md-4 col-sm-4 " style="border-left-color: lightsalmon;border-left-style: solid;">

                                                            <div class="row">
                                                                <div id="message"></div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 " >
                                                                    <label>Summary</label>
                                                           <p style="font-size:12px;">Created By: {{ $user->creator_name }}</p>
                                                                </div>
                                                                <div class="col-lg-6 col-md-6 col-sm-6 " >



                                                                    <input type="hidden" id="idname{{ $user->id }}" value="{{ $user->id }}"/>

                                                                    <label>Status</label>
                                                                    <select class="form-control form-control-sm" name="enq_status" id="status_value{{ $user->id }}">

                                                                        <option selected="" value="active" {{ $user->status == 'active' ? 'selected':'' }}>Active</option>
                                                                            <option value="passive" {{ $user->status == 'passive' ? 'selected':'' }}>Passive</option>
                                                                            <option value="dead" {{ $user->status == 'dead' ? 'selected':'' }}>Dead</option>
                                                                            <option value="won" {{ $user->status == 'won' ? 'selected':''}}>Won</option>
                                                                            <option value="lost" {{ $user->status == 'lost' ? 'selected':'' }}>Lost</option>
                                                                    </select>
                                                                </div>
                                                            </div>
<hr style="hight:5px;background:lightsalmon;">

<div class="task-info task-single-inline-wrap task-info-start-date">
    <h6><i class="uil-calendar-alt"></i>
        Enquiry Date: {{ date('d-m-Y', strtotime($user->date))}}
    </h6>

    <h6 id="normal_last"><i class="uil-calendar-alt" ></i>

        @if(empty($user->last_follow_up_date))
        Last Follow Up Date:
                                    @else
                                    Last Follow Up Date: {{ date('d-m-Y', strtotime($user->last_follow_up_date))}}
                                    @endif

    </h6>

    <h6 id="normal_next"><i class="uil-calendar-alt"></i>


        Next Follow Up Date: {{ date('d-m-Y', strtotime($user->next_follow_up_date))}}
    </h6>
</div>
<hr style="hight:5px;background:lightsalmon;">
<div class="task-info task-single-inline-wrap ptt10">

    <h6 style="font-size:12px;">Phone: {{ $user->phone }}</h6 >
    <h6 style="font-size:12px;">Address: {{ $user->address }}</h6 >
    <h6 style="font-size:12px;">Reference: {{ $user->refrence }}</h6>
    <h6 style="font-size:12px;">Description: {{ $user->des }}</h6 >
    <h6 style="font-size:12px;">Note: {{ $user->note }}</h6 >
    <h6 style="font-size:12px;">Source: {{ $user->source }}</h6 >
    <h6 style="font-size:12px;">Assigned: {{ $user->assigned }}</h6 >
    <h6 style="font-size:12px;">Email: {{ $user->email }}</h6 >
    <h6 style="font-size:12px;">Class: {{ $user->class }}</h6 >
    <h6 style="font-size:12px;">Number Of Child: {{ $user->number_of_child }}</h6 >
</div>


                                                            </div>
                                                        </div>

                                                        </div>
                                                    </div>

                                                </div>
                                            </div><!-- /.modal-content -->
                                        </div><!-- /.modal-dialog -->
                                    </div><!-- /.modal -->
                                    @endif



                                    @if (Auth::guard('admin')->user()->can('ae_delete'))

                                    <button type="button" class="btn btn-danger btn-sm waves-light waves-effect  btn-sm"
                                        onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i
                                            class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $user->id }}"
                                        action="{{ route('admin.admission_enquiry.delete',$user->id) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Admission Enquiry</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.admission_enquiry.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf


                    <div class="row mt-3">
                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Name</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="name"
                                placeholder="Enter Name">


                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Phone</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="phone"
                                placeholder="Enter Phone">


                        </div>


                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Email</label>
                            <input type="email" class="form-control form-control-sm" id="name" name="email"
                                placeholder="Enter Email">


                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="password">Address</label>
                            <textarea class="form-control form-control-sm" id="name" name="address">

                                    </textarea>
                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="password">Description</label>
                            <textarea class="form-control form-control-sm" id="name" name="des">

                                    </textarea>
                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="password">Note</label>
                            <textarea class="form-control form-control-sm" id="name" name="note">

                                    </textarea>
                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Date</label>
                            <input type="date" class="form-control form-control-sm" id="name"
                                value="<?php  echo date('Y-m-d')?>" name="date" placeholder="Enter Date">


                        </div>


                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Next Follow Up Date</label>
                            <input type="date" class="form-control form-control-sm" id="name"
                                value="<?php  echo date('Y-m-d')?>" name="next_follow_up_date"
                                placeholder="Enter Next Follow Up Date">


                        </div>

                        <div class="form-group col-md-4 col-sm-12">
                            <label for="name">Assigned</label>
                            <select class="form-control form-control-sm" name="assigned">
                                <option value="">----Please Select ----</option>
                                @foreach($user_list as $all_type)

                                <option value="{{ $all_type->name }}">{{ $all_type->name }}</option>

                                @endforeach
                            </select>


                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-3 col-sm-12">
                            <label for="name">Reference</label>
                            <select class="form-control form-control-sm" name="refrence">
                                <option value="">----Please Select ----</option>
                                @foreach($reference_details as $all_type)

                                <option value="{{ $all_type->name }}">{{ $all_type->name }}</option>

                                @endforeach
                            </select>


                        </div>


                        <div class="form-group col-md-3 col-sm-12">
                            <label for="name">Source</label>
                            <select class="form-control form-control-sm" name="source">
                                <option value="">----Please Select ----</option>
                                @foreach($source_details as $all_type)

                                <option value="{{ $all_type->name }}">{{ $all_type->name }}</option>

                                @endforeach
                            </select>


                        </div>


                        <div class="form-group col-md-3 col-sm-12">
                            <label for="name">Class</label>
                            <select class="form-control form-control-sm" name="class">
                                <option value="">----Please Select ----</option>
                                @foreach($class_details as $all_type)

                                <option value="{{ $all_type->name }}">{{ $all_type->name }}</option>

                                @endforeach
                            </select>


                        </div>
                        <div class="form-group col-md-3 col-sm-12">
                            <label for="name">Number of Child</label>
                            <input type="text" class="form-control form-control-sm" id="name" name="number_of_child"
                                placeholder="Enter Number">


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
    $("[id^=status_value]").change(function(){
        var status_value = $(this).val();

        var id_select = $(this).attr('id');
    var last_two_id = id_select.slice(12);


    var main_id_value = $('#idname'+last_two_id).val();


    //alert(main_id_value);






        //alert(id_country);
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('admission_enquiry_status') }}",
            method: 'POST',
            data: {status_value:status_value, _token:token,main_id_value:main_id_value},
            success: function(data) {
                $('#message').append(

                    '<div class="alert alert-success alert-dismissible fade show" role="alert">'+
    '<i class="uil uil-check me-2">'+
    '</i>'+
    data.message+
    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">'+

    '</button>'+
'</div>'

                );
              $("select[name='enq_status'").html('');
              $("select[name='enq_status'").html(data.options);
            }
        });
    });
  </script>

<script type="text/javascript">
    $("#last_close_value").click(function(){

        location.reload(true);

    });
  </script>


<script type="text/javascript">
    $("[id^=new_submit_button]").click(function(){


        var id_select = $(this).attr('id');
    var last_two_id = id_select.slice(17);
//alert(last_two_id);
        var follow_up_value = $('#fud_value').val();
        var next_follow_up_value = $('#nfud_value').val();
        var response_value = $('#response_value').val();
        var note_value = $('#note_value').val();
        var token = $("input[name='_token']").val();
        //location.reload(true);


        $.ajax({
            url: "{{ route('admission_enquiry_extra') }}",
            method: 'POST',
            data: {last_two_id:last_two_id,response_value:response_value,note_value:note_value,follow_up_value:follow_up_value, _token:token,next_follow_up_value:next_follow_up_value},
            success: function(data) {

               // location.reload(true);
                $('#message1').append(

                    '<div class="alert alert-success alert-dismissible fade show" role="alert">'+
    '<i class="uil uil-check me-2">'+
    '</i>'+
    data.message+
    '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">'+

    '</button>'+
'</div>'

                );
                //console.log(data);
                $("#normal_list").hide();
               //$("#submit_list_new").html('');
                $('#nfud_value').val('');
       $('#response_value').val('');

       $('#normal_last').text('');

       $('#normal_next').text('');


       var startdate = follow_up_value.split("-").reverse().join("-");
       var enddate = next_follow_up_value.split("-").reverse().join("-");


       $('#normal_last').text('Last Follow Up Date: '+startdate);

       $('#normal_next').text('Next Follow Up Date: '+enddate);



         $('#note_value').val('');
               $("#submit_list_new").html(data.options);
            }
        });

    });
  </script>




<script type="text/javascript">
    $(document).ready(function () {

$("body").on("click","#deleteCompany",function(e){

   if(!confirm("Do you really want to do this?")) {
      return false;
    }

   e.preventDefault();
   var id = $(this).data("id");
   // var id = $(this).attr('data-id');
   var token = $("meta[name='csrf-token']").attr("content");
   var url = e.target;

   $.ajax(
       {
         url: url.href, //or you can use url: "company/"+id,
         type: 'DELETE',
         data: {
           _token: token,
               id: id
       },
       success: function (response){

           $("#success").html(response.message)

           location.reload(true);

           Swal.fire(
             'Remind!',
             'Company deleted successfully!',
             'success'
           )
       }
    });
     return false;
  });


});
</script>
@endsection
