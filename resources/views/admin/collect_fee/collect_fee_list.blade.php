@extends('admin.master.master')

@section('title')
Student Fee List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Student Fee Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $ins_name }} </a></li> --}}
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
                </ol>
            </div>

        </div>
    </div>
</div>


<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                {{-- @include('flash_message') --}}


                <div class="row" style="border: 1px solid #dadada;border-radius: 2px;padding: 5px;overflow: hidden;">
                    <div class="col-md-1">
                        @if($student_list->gender == 'Male')

                        @if(empty($student_list->student_photo))

                        <img src="{{ asset('/') }}public/stu_demo.jpg" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $student_list->student_photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @else
                        @if(empty($student_list->student_photo))

                        <img src="{{ asset('/') }}public/stu_fe_demo.png" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">


                        @else

                        <img src="{{ asset('/') }}{{ $student_list->student_photo }}" alt=""
                            class="avatar-lg rounded-circle img-thumbnail">
                        @endif

                        @endif
                    </div>
                    <div class="col-md-6">
                        <table class="table table-striped table-hove">
                            <tr>
                                <td>Name:</td>
                                <td>{{ $student_list->first_name.''.$student_list->last_name }}</td>
                            </tr>
                            <tr>
                                <td>Father Name:</td>
                                <td>{{ $student_list->father_name }}</td>
                            </tr>
                            <tr>
                                <td>Mobile Number:</td>
                                <td>{{ $student_list->mobile_number}}</td>
                            </tr>


                        </table>
                    </div>
                    <div class="col-md-5">
                        <table class="table table-striped table-hove">
                            <tr>
                                <td>Branch:</td>
                                <td>{{ $student_list->student_house}}</td>
                            </tr>
                          


                        </table>
                    </div>
                </div>
<hr style="height: 4px;color:black">

<div class="row">

    <div class="col-sm-6">
        <div class="float-right d-md-block">

        </div>
    </div>
</div>

<div class="row mt-4">
    @include('flash_message')
    <div class="col-sm-12">

<!--table-->
<div class="table-responsive">
    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
    style="border-collapse: collapse; border-spacing: 0; width: 100%;font-size:12px">
                                        <thead>
                                            <tr>
                                    <th>Fees Group</th>
                                    <th>Fees Type</th>
                                    <th>Due Date</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Payment ID</th>
                                    <th>Mode</th>
                                    <th>Date</th>
                                    <th>Discount</th>
                                    <th>Fine</th>
                                    <th>Paid</th>
                                    <th>Balance</th>
                                    <th>Action</th>
                                            </tr>
                                        </thead>



                                        <tbody>
                                      @foreach($fee_amount_detail as $all_fee_amount)
                                            <tr>
                                                <td>

                                                    <?php $fee_group_name = DB::table('fee_groups')->where('id',$all_fee_amount->fee_group)->value('name'); ?>


                                                            {{ $fee_group_name}}


                                                </td>
                                                <td>{{ $all_fee_amount->fee_type }}</td>
                                                <td>

                                               {{ date('d/m/Y', strtotime($all_fee_amount->due_date))}}



                                                </td>
                                                <td>
                                                 <?php

                                                 $status_of_fee = DB::table('collect_fees')
                                                 ->where('student_id',$student_list->id)
                                                 ->where('fee_id',$all_fee_amount->id)->value('status');
                                                //  dd($status_of_fee);
                                                  ?>

                                                  @if(empty($status_of_fee))
                                                  <span class="badge bg-soft-danger font-size-12">Unpaid</span>
                                                  @else
                                                  <span class="badge bg-soft-success font-size-12">{{ $status_of_fee }}</span>

                                                  @endif

                                                </td>
                                                <td>{{ $all_fee_amount->amount }}</td>
                                                <td>
                                                    <?php
                                                    $payment_id = DB::table('collect_fees')
                                                 ->where('student_id',$student_list->id)
                                                 ->where('fee_id',$all_fee_amount->id)->value('payment_id');
                                                //  dd($status_of_fee);
                                                  ?>

                                                  {{  $payment_id }}
                                                </td>
                                                <td>
                                                    <?php
                                                    $payment_mode = DB::table('collect_fees')
                                                 ->where('student_id',$student_list->id)
                                                 ->where('fee_id',$all_fee_amount->id)->value('payment_mode');
                                                //  dd($status_of_fee);
                                                  ?>

                                                  {{  $payment_mode }}
                                                </td>
                                                <td>
                                                    <?php
                                                    $payment_date = DB::table('collect_fees')
                                                 ->where('student_id',$student_list->id)
                                                 ->where('fee_id',$all_fee_amount->id)->value('date');
                                                //  dd($status_of_fee);
                                                  ?>

@if(empty($payment_date))

@else

{{ date('d/m/Y', strtotime($payment_date))}}
@endif

                                                </td>
                                                <td> <?php
                                                    $payment_discount = DB::table('collect_fees')
                                                 ->where('student_id',$student_list->id)
                                                 ->where('fee_id',$all_fee_amount->id)->value('discount_amount');
                                                //  dd($status_of_fee);
                                                  ?>

                                                  {{  $payment_discount }}</td>
                                                <td>

                                                    <?php
                                                    $payment_fine = DB::table('collect_fees')
                                                 ->where('student_id',$student_list->id)
                                                 ->where('fee_id',$all_fee_amount->id)->value('fine_amount');
                                                //  dd($status_of_fee);
                                                  ?>

                                                  {{  $payment_fine }}

                                                </td>
                                                <td>
                                                    <?php
                                                    $payment_amount = DB::table('collect_fees')
                                                 ->where('student_id',$student_list->id)
                                                 ->where('fee_id',$all_fee_amount->id)->value('account_money');
                                                //  dd($status_of_fee);
                                                  ?>

                                                  {{  $payment_amount }}
                                                </td>
                                                <td>
                                                    <?php
                                                    $payment_amount_due = DB::table('collect_fees')
                                                 ->where('student_id',$student_list->id)
                                                 ->where('fee_id',$all_fee_amount->id)->value('due');
                                                //  dd($status_of_fee);
                                                  ?>

                                                  {{  $payment_amount_due }}
                                                </td>
                                                <td>

                                                    @if(empty($status_of_fee))


            <button type="button" class="btn btn-primary waves-light waves-effect  btn-sm" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $all_fee_amount->id }}">
                                                        <i class="uil-plus-circle"></i></button>


                                                        @elseif($status_of_fee == 'Partial')
                                                        <button type="button" class="btn btn-primary waves-light waves-effect  btn-sm" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $all_fee_amount->id }}">
                                                            <i class="uil-plus-circle"></i></button>
                                                            @else

                                                        @endif




                                                        <div class="modal fade bs-example-modal-lg{{ $all_fee_amount->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">
                             <?php $fee_group_name = DB::table('fee_groups')->where('id',$all_fee_amount->fee_group)->value('name'); ?>
                             {{ $fee_group_name}}:{{ $all_fee_amount->fee_type }}
                            </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('admin.collect_fee.store') }}" method="POST" enctype="multipart/form-data">

                                                                        @csrf

                                                                        <input type="hidden" value="{{ $student_list->id }}" name="student_id">

                                                                        <input type="hidden" value="{{ $all_fee_amount->id }}" name="fee_id">
                                                                        <div class="row">
                                                                            <div class="form-group col-md-6 col-sm-12">
                                                                                <label for="name">Date</label>
                                                                <input type="date" class="form-control form-control-sm" id="name" name="date" placeholder="Enter Date" value="<?php  echo date('Y-m-d')?>">


                                                                            </div>

                                                                             <div class="form-group col-md-6 col-sm-12">
                                                                                <label for="password">Amount</label>
                                                                    <input type="number" class="form-control form-control-sm" id="name" name="account_money" placeholder="Enter Amount" value="{{ $all_fee_amount->amount }}">
                                                                            </div>


                                                                            <div class="form-group col-md-12 col-sm-12">
                                                                                <label for="password">DisCount</label>
                                                                                <select class="form-control form-control-sm" id="name" name="discount_type">
<option>--->Please Select <---</option>
<option value="none">None</option>
                                                                                    @foreach($fee_discount_details as $all_discount)

<option value="{{ $all_discount->name }}">{{ $all_discount->name }}</option>
                                                                           @endforeach

                                                                                </select>

                                                                            </div>

                                                                            <div class="form-group col-md-6 col-sm-12">
                                                                                <label for="password">Discount Amount</label>
                                                                    <input type="number" class="form-control form-control-sm" id="discount_amount" name="discount_amount" placeholder="Enter Discount Amount" value="">
                                                                            </div>

                                                                            <?php

                                                                            $due_date = $all_fee_amount->due_date;
                                                                            $current_date = date('Y-m-d');

                                                                            ?>

                                                                       @if($due_date >= $current_date )
                                                                       <div class="form-group col-md-6 col-sm-12">
                                                                        <label for="password">Fine Amount</label>
                                                            <input type="number" class="form-control form-control-sm" id="fine_amount" name="fine_amount" placeholder="Enter Fine Amount" value="0">
                                                                    </div>

                                                                       @else
                                                                            <div class="form-group col-md-6 col-sm-12">
                                                                                <label for="password">Fine Amount</label>
                                                                    <input type="number" class="form-control form-control-sm" id="fine_amount" name="fine_amount" placeholder="Enter Fine Amount" value="{{ $all_fee_amount->fine_amount}}">
                                                                            </div>
@endif

                                                                            <div class="form-group col-md-12 col-sm-12">
                                                                                <label for="password">Pament Mode</label><br>
                                                                                <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="payment_mode" id="inlineRadio1" value="Cash">
                                                                                    <label class="form-check-label" for="inlineRadio1">Cash</label>
                                                                                  </div>
                                                                                  <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="payment_mode" id="inlineRadio2" value="Cheque">
                                                                                    <label class="form-check-label" for="inlineRadio2">Cheque</label>
                                                                                  </div>

                                                                                  <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="payment_mode" id="inlineRadio3" value="DD">
                                                                                    <label class="form-check-label" for="inlineRadio3">DD</label>
                                                                                  </div>

                                                                                  <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="payment_mode" id="inlineRadio4" value="Bank Transfer">
                                                                                    <label class="form-check-label" for="inlineRadio4">Bank Transfer</label>
                                                                                  </div>
                                                                                  <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="payment_mode" id="inlineRadio5" value="UPI">
                                                                                    <label class="form-check-label" for="inlineRadio5">UPI</label>
                                                                                  </div>

                                                                                  <div class="form-check form-check-inline">
                                                                                    <input class="form-check-input" type="radio" name="payment_mode" id="inlineRadio6" value="Card">
                                                                                    <label class="form-check-label" for="inlineRadio6">Card</label>
                                                                                  </div>
                                                                            </div>


                                                                            <div class="form-group col-md-12 col-sm-12">
                                                                                <label for="password">Note</label>

<textarea class="form-control form-control-sm" name="note"></textarea>
                                                                            </div>


                                                                        </div>





                                                                        <button type="submit" class="btn btn-sm btn-success mt-4 pr-4 pl-4">Collect Fees</button>

                                                                    </form>
                                                                </div>

                                                              </div>
                                                            </div>
                                                          </div>


         <button type="button"  onclick="printContent('barcode{{ $all_fee_amount->id }}')" class="btn btn-success waves-light waves-effect  btn-sm" >
                                                        <i class="uil-print"></i></button>



<div id="barcode{{ $all_fee_amount->id }}" style="display: none">
<h1>{{ $all_fee_amount->id }}</h1>
</div>

<button type="button" onclick="deleteTag({{ $all_fee_amount->id}})" class="btn btn-danger waves-light waves-effect  btn-sm" ><i class="dripicons-trash"></i></button>


<form id="delete-form-{{ $all_fee_amount->id }}" action="{{ route('admin.collect_fee.delete',$all_fee_amount->id) }}" method="POST" style="display: none;">
    @method('DELETE')
                                  @csrf

                              </form>


                                                </td>
                                            </tr>
@endforeach
                                        </tbody>
                                    </table>
</div>
<!--table-->
    </div>
</div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')


<script>
    function printContent(el){
        var restorepage = document.body.innerHTML;
        var printcontent = document.getElementById(el).innerHTML;
        document.body.innerHTML = printcontent;
        window.print();
        document.body.innerHTML = restorepage;
    }
</script>

<script type="text/javascript">
    $("select[name='discount_type']").change(function(){
        var discount_type = $(this).val();

        // if(discount_type == 'none'){


        //     $('#discount_amount').val(0);



        // }else{
        //     $('#discount_amount').val(discount_type);

        // }


        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('collect_discount') }}",
            method: 'POST',
            data: {discount_type:discount_type, _token:token},
            success: function(data) {




              $('#discount_amount').val(data.options);
            }
        });


    });
  </script>


<script type="text/javascript">
    $(document).on('click', '.aev_fora', function () {
        var target = $(this).val();
       // alert(target);

        if (target == 'None') {


            $("#percen").prop('disabled', true);
            $("#fine_amount").prop('disabled', true);


        }


        if (target == 'Percentage') {
            $("#percen").prop('disabled', false);
            $("#fine_amount").prop('disabled', false);
        }


        if (target == 'Fix Amount') {
            $("#percen").prop('disabled', true);
            $("#fine_amount").prop('disabled', false);
        }



    });


    $(document).ready(function() {

  $("#percen").keyup(function() {


     var percen = $(this).val();
     var main_amount  = $('#amount_main').val();


     var final_result = main_amount*(percen/100);

     $('#fine_amount').val(final_result);





  });
});

</script>



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
                document.getElementById('deleteform'+ id).submit();
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
    $("select[name='class_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('department_search') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='department_id'").html('');
              $("select[name='department_id'").html(data.options);
            }
        });
    });
  </script>
   <script type="text/javascript">
    $("select[name='class_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('section_search') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='section_id'").html('');
              $("select[name='section_id'").html(data.options);
            }
        });
    });
  </script>
  <script type="text/javascript">
    $("select[name='department_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('dpsection_search') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='section_id'").html('');
              $("select[name='section_id'").html(data.options);
            }
        });
    });
  </script>
  <script type="text/javascript">
    $("select[name='class_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('subject_search') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='subject_id'").html('');
              $("select[name='subject_id'").html(data.options);
            }
        });
    });
  </script>
  <script type="text/javascript">
    $("select[name='department_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('subject_search_dpwise') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='subject_id'").html('');
              $("select[name='subject_id'").html(data.options);
            }
        });
    });
  </script>
  <script type="text/javascript">
    $("select[name='section_id']").change(function(){
        var id_country = $(this).val();
        var token = $("input[name='_token']").val();
        $.ajax({
            url: "{{ route('student_search') }}",
            method: 'POST',
            data: {id_country:id_country, _token:token},
            success: function(data) {
              $("select[name='students_id'").html('');
              $("select[name='students_id'").html(data.options);
            }
        });
    });
  </script>
@endsection
