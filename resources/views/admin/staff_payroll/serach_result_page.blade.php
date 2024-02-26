@extends('admin.master.master')

@section('title')
{{ $staff_list->first_name }}  | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<style>
    .sfborder {
        border: 1px solid #dadada;
        border-radius: 2px;
        margin-bottom: 10px;
        overflow: hidden;
    }

    .round5 {
        padding: 5px;
    }

    .bozero {
        border-top: 0 !important;
    }

    .payroll_table > tbody > tr > td,
    .payroll_table > tbody > tr > th,
    .payroll_table > tfoot > tr > td,
    .payroll_table > tfoot > tr > th,
    .payroll_table > thead > tr > td,
    .payroll_table > thead > tr > th {
        padding: 5px;
        line-height: 1.42857143;
        vertical-align: top;
        border-top: 1px solid #ddd;
    }

    .sfborder {
        border: 1px solid #dadada;
        border-radius: 2px;
        margin-bottom: 10px;
        overflow: hidden;
    }

    .letest {
        position: absolute;
        left: -45px;
        top: 43px;
        bottom: 0;
        font-size: 14px;
        letter-spacing: 2px;
        text-align: center;
    }

    .rotatetest {
        text-transform: uppercase;
        -moz-transform: rotate(-90.0deg);
        -o-transform: rotate(-90.0deg);
        -webkit-transform: rotate(
                -90.0deg
        );
        position: absolute;
        padding: 4px 3px 3px 4px;
        border-bottom: 1px solid #dadada;
    }
    .sameheight {
        margin-top: 10px;
        height: 90%;
        border-radius: 2px;
        background-color: #fff;
        border: 1px solid #dadada;
        margin-bottom: 10px;
    }

    .feebox {
        margin-top: 10px;
        padding: 10px 10px 0;
        position: relative;
    }

    .payrollbox, .feebox {
        margin-top: 10px;
        padding: 10px 10px 0;
        position: relative;
    }

    .plusign {
        background: #727272;
        border: 1px solid #525252;
        border-radius: 3px;
        float: right;
        color: #fff;
        outline: 0;
        transition: all 0.5s ease;
        padding: 0px 5px;
    }

</style>
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Staff   Information</h4>

            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    {{-- <li class="breadcrumb-item"><a href="javascript: void(0);">{{ $ins_name }} </a></li> --}}
                    <li class="breadcrumb-item active">{{ $ins_name }} </li>
                </ol>
            </div>

        </div>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <div class="row">

            <div class="col-8">
                <div class="row sfborder">

                    <div class="col-md-2">
                        <div class="row">
                            @if($staff_list->gender == 'Male' )


                           @if(empty($staff_list->photo))

                           <img width="115" height="115" class="round5"
                                 src="{{ asset('/') }}public/m_demo.jpg"
                                 alt="No Image">

                           @else
                            <img width="115" height="115" class="round5"
                                 src="{{ asset('/') }}{{ $staff_list->photo }}"
                                 alt="No Image">
@endif

                                 @else

                                 @if(empty($staff_list->photo))

                                 <img width="115" height="115" class="round5"
                                       src="{{ asset('/') }}public/f_demo.png"
                                       alt="No Image">

                                 @else
                                  <img width="115" height="115" class="round5"
                                       src="{{ asset('/') }}{{ $staff_list->photo }}"
                                       alt="No Image">
      @endif





                                 @endif
                        </div>
                    </div>

                    <div class="col-md-10">
                        <div class="row">
                            <table class="table payroll_table mb-0 font-size-13">
                                <tbody>
                                <tr>
                                    <th class="bozero">Name</th>
                                    <td class="bozero">{{ $staff_list->first_name.''.$staff_list->last_name }}</td>
                                    <th class="bozero">Staff ID</th>
                                    <td class="bozero">{{ $staff_list->staff_id }}</td>
                                </tr>
                                <tr>
                                    <th>Phone</th>
                                    <td>{{ $staff_list->phone }}</td>
                                    <th>Email</th>
                                    <td>{{ $staff_list->email }}</td>
                                </tr>
                                <tr>
                                    <th>EPF No</th>
                                    <td>{{ $staff_list->epf_no }}</td>
                                    <th>Role</th>
                                    <td>{{ $staff_list->role }}</td>
                                </tr>
                                <tr>
                                    <th>Department</th>
                                    <td>{{ $staff_list->department }}</td>
                                    <th>Designation</th>
                                    <td>{{ $staff_list->designation }}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div> <!-- end col -->
            <div class="col-md-4 col-sm-12">

                <div class="sfborder position-relative overflow-visible">
                    <div class="letest">
                        <div class="rotatetest">Attendance</div>
                    </div>
                    <div style="padding-left: 33px">
                        <table class="table payroll_table mb-0 font-size-13">
                            <tbody>
                            <tr>
                                <th class="bozero">Month</th>
                                <th class="bozero"><span data-bs-toggle="tooltip" data-bs-placement="top" title="Present">P</span></th>
                                <th class="bozero"><span data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Late">L</span></th>
                                <th class="bozero"><span data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Absent">A</span></th>
                                <th class="bozero"><span data-bs-toggle="tooltip" data-bs-placement="top" title="Half Day">F</span>
                                </th>
                                <th class="bozero"><span data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Holiday">H</span></th>

                                <th class="bozero"><span data-bs-toggle="tooltip" data-bs-placement="top"
                                                         title="Approved Leave">V</span></th>
                            </tr>
                            <tr>
                                <td>{{ $current_month }} ({{substr($year,-2)}})</td>
                                <td>{{ $present_list }}</td>
                                <td>{{ $late_list }}</td>
                                <td>{{ $absent_list }}</td>
                                <td>{{ $half_day_list }}</td>
                                <td>{{ $holiday_list }}</td>
                                <td>{{ $current_vacation_day }}</td>
                            </tr>
                            <tr>
                                <td>{{ $previous_month_first_annual }} ({{substr($year,-2)}})</td>
                                <td>{{ $previous_month_first_present_list }}</td>
                                <td>{{ $previous_month_first_late_list }}</td>
                                <td>{{ $previous_month_first_absent_list }}</td>
                                <td>{{ $previous_month_first_half_day_list }}</td>
                                <td>{{ $previous_month_first_holiday_list }}</td>
                                <td>{{ $previous_first_vacation_day }}</td>
                            </tr>
                            <tr>
                                <td>{{ $previous_month_second_annual }} ({{substr($year,-2)}})</td>
                                <td>{{ $previous_month_second_present_list }}</td>
                                <td>{{ $previous_month_second_late_list }}</td>
                                <td>{{ $previous_month_second_absent_list }}</td>
                                <td>{{ $previous_month_second_half_day_list }}</td>
                                <td>{{ $previous_month_second_holiday_list }}</td>
                                <td>{{ $previous_second_vacation_day }}</td>
                            </tr>
                            <tr>


                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>


            </div>
            <div class="col-md-12">
                <div style="background: #dadada; height: 1px; width: 100%; clear: both; margin-bottom: 10px;"></div>
            </div>

            <div class="col-md-12">
                <form class="" method="post" action="{{ route('admin.staff_payroll.store') }}">
                    @csrf
<input type="hidden" name="staff_id" value="{{ $new_main_id }}"
                    <div class="box-header">
                        <div class="row">
                            <div class="col-md-4 col-sm-4">
                                <div class=" d-flex align-items-center justify-content-between">
                                    <h3 class="card-title">Earning($)</h3>

                                    <div class="page-title-right">
                                        <button type="button" id="dynamic-ar" class="btn plusign"> +
                                        </button>
                                    </div>

                                </div>

                                <div class="sameheight">
                                    <div class="feedbox">
                                        <table class="table table-bordered" id="dynamicAddRemove">
                                            <tr>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="earning_type[]" id="earning_type0" placeholder="Enter Type" class="form-control form-control-sm" />
                                                </td>
                                                <td><input type="text" name="earning_amount[]" id="earning_amount0" placeholder="Enter Amount" class="form-control form-control-sm earning" />
                                                </td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div><!--./col-md-4-->
                            <div class="col-md-4 col-sm-4">

                                <div class=" d-flex align-items-center justify-content-between">
                                    <h3 class="card-title">Deduction($)</h3>

                                    <div class="page-title-right">
                                        <button type="button" id="dynamic-ar1" class="btn plusign"> +
                                        </button>
                                    </div>

                                </div>

                                <div class="sameheight">
                                    <div class="feedbox">
                                        <table class="table table-bordered" id="dynamicAddRemove1">
                                            <tr>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th></th>
                                            </tr>
                                            <tr>
                                                <td><input type="text" name="deduction_type[]" id="deduction_type0" placeholder="Enter Type" class="form-control form-control-sm" />
                                                </td>
                                                <td><input type="text" name="deduction_amount[]" id="deduction_amount0" placeholder="Enter Amount" class="form-control form-control-sm deduction" />
                                                </td>
                                                <td></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div><!--./col-md-4-->
                            <div class="col-md-4 col-sm-4">

                                <div class=" d-flex align-items-center justify-content-between">
                                    <h3 class="card-title">Payroll Summary($)</h3>

                                    <div class="page-title-right">
                                        <button type="button" class="btn plusign"  id="final_value"><i class="fa fa-calculator"></i> Calculate
                                        </button>
                                    </div>

                                </div>

                                <div class="sameheight">
                                    <div class="payrollbox feebox">
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Basic Salary</label>
                                            <div class="col-md-9">
                                                <input class="form-control form-control-sm" type="number" name="final_basic" value="{{ $basic_salary }}" id="final_basic">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Earning</label>
                                            <div class="col-md-9">
                                                <input class="form-control form-control-sm" type="number" name="final_earning" value="0" id="final_earning">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Deduction</label>
                                            <div class="col-md-9">
                                                <input class="form-control form-control-sm" type="number" name="final_deduction" value="0" id="final_deduction">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Gross Salary</label>
                                            <div class="col-md-9">
                                                <input class="form-control form-control-sm" type="number" name="gross_salary" value="0" id="gross_salary">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Tax</label>
                                            <div class="col-md-9">
                                                <input class="form-control form-control-sm" type="number" name="tax_value" value="0" id="tax_value">
                                            </div>
                                        </div>

                                        <hr>

                                        <div class="mb-3 row">
                                            <label for="example-text-input" class="col-md-3 col-form-label">Net Salary</label>
                                            <div class="col-md-9">
                                                <input class="form-control form-control-sm" type="number" name="net_salary" value="" id="net_salary">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--./col-md-4-->

                            <div class="col-md-12 col-sm-12">

                                <button  class="btn btn-info pull-right">Save</button>
                            </div><!--./col-md-12-->


                        </div><!--./row-->
                    </div>
                </form>
            </div>




        </div>
    </div>
</div>
<!-- end row -->

@endsection


@section('script')
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="text" name="earning_type[]" id="earning_type'+i+'" placeholder="Enter Type" class="form-control form-control-sm" /></td><td><input type="text" name="earning_amount[]" id="earning_amount'+i+'" placeholder="Enter Amount" class="form-control form-control-sm earning" /></td><td><button type="button" class="btn btn-danger btn-sm remove-input-field"><i class="uil-trash-alt"></i></button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar1").click(function () {
        ++i;
        $("#dynamicAddRemove1").append('<tr><td><input type="text" name="deduction_type[]" id="deduction_type'+i+'" placeholder="Enter Type" class="form-control form-control-sm" /></td><td><input type="text" name="deduction_amount[]" id="deduction_amount'+i+'" placeholder="Enter Amount" class="form-control form-control-sm deduction" /></td><td><button type="button" class="btn btn-danger btn-sm remove-input-field1"><i class="uil-trash-alt"></i></button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field1', function () {
        $(this).parents('tr').remove();
    });
</script>
<script type="text/javascript">

$(document).ready(function(){
  $("#final_value").click(function(){

    // const earning_amount = $.map($('input[type=text][name="earning_amount[]"]'), function(el) { return el.value; });
    var totalSum_earning = 0;
$('.earning').each(function () {
    totalSum_earning += parseFloat(this.value);
});


var totalSum_deduction = 0;
$('.deduction').each(function () {
    totalSum_deduction += parseFloat(this.value);
});


$("#final_earning").val(totalSum_earning);
$("#final_deduction").val(totalSum_deduction);


 var final_earning = $("#final_earning").val();

 var final_deduction = $("#final_deduction").val();

 var final_basic_salary = $("#final_basic").val();

 var final_gross_salary = $("#gross_salary").val();

 var final_tax_salary = $("#tax_value").val();


 var first_value = parseFloat(final_basic_salary)+parseFloat(final_earning);
 var second_value = parseFloat(first_value) + parseFloat(final_gross_salary);

 var minus_first_value = parseFloat(final_deduction)+parseFloat(final_tax_salary)

 console.log(second_value);


 var net_salary = second_value - minus_first_value;
console.log(net_salary);
 $("#net_salary").val(net_salary);
    //alert(totalSum_deduction);
  });
});

</script>

@endsection
