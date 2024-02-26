


<div class="row mt-3" >
    <div class="form-group col-md-12 col-sm-12">
    <table class="table table-bordered  table-hover">
        <thead>
          <tr>
            <th scope="col">Staff id</th>
            <th scope="col">Staff Name</th>
            <th scope="col">Role Name</th>
            <th scope="col">Department</th>
            <th scope="col">Designation</th>
            <th scope="col">Phone</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach($staff_list as $key=>$new_details)
          <tr>
            <td scope="row">
                {{ $new_details->staff_id }}


            </td>
            <td scope="row">
                {{ $new_details->first_name.''.$new_details->last_name }}


            </td>
            <td scope="row">
                {{ $new_details->role }}


            </td>
            <td scope="row">
                {{ $new_details->department }}


            </td>

            <td scope="row">
                {{ $new_details->designation }}


            </td>

            <td scope="row">
                {{ $new_details->phone }}


            </td>


            <td scope="row">

                <?php
                if($month <= 9 ){

                    $digit_month = '0'.$month;
                }else{


                    $digit_month =$month;

                }
                $check_payment =  DB::table('payrolls')
                ->where('digit_month',$digit_month)->where('year',$year)
                ->where('staff_id',$new_details->id)
                ->value('netsalary');

                $check_status =  DB::table('payrolls')
                ->where('digit_month',$digit_month)->where('year',$year)
                ->where('staff_id',$new_details->id)
                ->value('status');
                 ?>

                 @if(empty($check_payment))



                 @else
                {{ $check_status }}
                  @endif
            </td>


            <td scope="row">

                <?php
                if($month <= 9 ){

                    $digit_month = '0'.$month;
                }else{


                    $digit_month =$month;

                }
                $check_payment =  DB::table('payrolls')
                ->where('digit_month',$digit_month)->where('year',$year)
                ->where('staff_id',$new_details->id)
                ->value('netsalary');

                $check_status =  DB::table('payrolls')
                ->where('digit_month',$digit_month)->where('year',$year)
                ->where('staff_id',$new_details->id)
                ->value('status');
                 ?>

                 @if(empty($check_payment))

                 <a   href ="{{ route('admin.staff_search_for_payroll',['staff_id' => $new_details->id,'year' => $year,'month'=> $month]) }}" class="btn btn-success btn-sm  waves-effect  btn-sm waves-light " >
                    Generate Payroll

                </a>

                 @else
                 @if($check_status == 'Genarated')

                 <a   type="button" data-id="{{ $new_details->id }}" class="btn btn-primary  waves-effect  btn-sm waves-light pp" id="main_p{{ $new_details->id }}">
                    Proceed To Pay
                </a>
<!-- Modal HTML -->
<div id="myModal{{ $new_details->id }}" class="modal fade" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Payment Process</h5>
                <button type="button" data-id="{{ $new_details->id }}" id="main_c{{ $new_details->id }}"  class=" btn btn-danger btn-sm  close cc" ><i class="uil-plus-circle"></i></button>
            </div>
            <div class="modal-body">
            <form method="post" action="{{ route('staff_payroll_trasection') }}" >

                @csrf

                <div class="row">
                    <div class="form group col-md-6">
                        <label>Staff Name</label>
                        <input type="text" value="{{ $new_details->first_name.' '.$new_details->last_name }}({{ $new_details->staff_id }})" class="form-control form-control-sm" name="staff_name">
                        <input type="hidden" value="{{ $new_details->id}}" class="form-control form-control-sm" name="id">
                    </div>
                    <div class="form group col-md-6">
                        <?php $all_data = DB::table('payrolls')->where('staff_id',$new_details->id)->value('netsalary');?>
                        <label>Paymeny Amount</label>
                        <input type="text" value="{{ $all_data }}" class="form-control form-control-sm" name="payment_amount">
                    </div>
                    <div class="form group col-md-6">
                        <?php $all_data_month = DB::table('payrolls')->where('staff_id',$new_details->id)->value('month');?>
                        <label>Month Year</label>
                        <input type="text" value="{{ $all_data_month }} - {{ $year }}" class="form-control form-control-sm" name="month_year">
                    </div>
                    <div class="form group col-md-6">

                        <label>Payment Mode</label>
                        <select class="form-control form-control-sm" name="payment_mode">
<option value="Cash">Cash</option>
<option value="Check">Check</option>
<option value="Transfer To Bank">Transfer To Bank</option>
                        </select>

                    </div>
                    <div class="form group col-md-6">

                        <label>Payment Date</label>
                        <input type="date" value="<?php echo date('Y-m-d') ?>" class="form-control form-control-sm" name="payment_date">
                    </div>
                    <div class="form group col-md-6">

                        <label>Note</label>
                        <textarea class="form-control form-control-sm" name="text_note"></textarea>

                    </div>
                </div>
                <div class="col-lg-12 mt-2">
                    <div class="float-right d-none d-md-block">
                        <div class="form-group mb-4">
                            <div>
                                <button  class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1" >
                                   Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            </div>

        </div>
    </div>
</div>
                 @else
                 <a   type="button" data-id="{{ $new_details->id }}" class="btn btn-primary btn-sm  waves-effect  btn-sm waves-light " id="main_pp{{ $new_details->id }}">
                    View Payslip
                </a>
                <!-- Modal -->
<div id="myModalll{{ $new_details->id }}" class="modal fade" tabindex="-1">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">View Payslip</h5>
          <button type="button" data-id="{{ $new_details->id }}" id="main_cc{{ $new_details->id }}"  class=" btn btn-danger btn-sm  close cc" ><i class="uil-plus-circle"></i></button>
        </div>
        <div class="modal-body">
          ...
        </div>

      </div>
    </div>
  </div>
                  @endif

@endif

            </td>

          </tr>
          @endforeach
        </tbody>
      </table>




    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){


       $("[id^=main_p]").click(function(){


        var index = $(this).data("id");
          // alert(index);
           $("#myModal"+index).modal('show');



       });

       $("[id^=main_pp]").click(function(){


var index = $(this).data("id");
  // alert(index);
   $("#myModalll"+index).modal('show');



});




       $("[id^=main_c]").click(function(){
        var index = $(this).data("id");
//alert(2);
$("#myModal"+index).modal('hide');
});

$("[id^=main_cc]").click(function(){
        var index = $(this).data("id");
//alert(2);
$("#myModalll"+index).modal('hide');
});
   });
</script>
