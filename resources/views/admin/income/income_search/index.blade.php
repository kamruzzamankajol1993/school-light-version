@extends('admin.master.master')

@section('title')
Search Income List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Search Income Information</h4>

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

    <div class="col-sm-12">


            <div class="row">
                <div class="col-md-6">
                    <div class="row">

                            <input type="hidden" name="ci_csrf_token" value="">
                            <div class="col-sm-6 col-md-6">
                                <div class="form-group">
                                    <label>Search Type</label>
                                    <select class="form-control form-control-sm" name="search_type" id="search_type_value"  >

                                                                                                <option value="" selected="">Select</option>
                                                                                                        <option value="today">Today</option>d
                                                                                                        <option value="this_week">This Week</option>
                                                                                                        <option value="last_week">Last Week</option>
                                                                                                        <option value="this_month">This Month</option>
                                                                                                        <option value="last_month">Last Month</option>
                                                                                                        <option value="last_3_month">Last 3 Months</option>
                                                                                                        <option value="last_6_month">Last 6 Months</option>
                                                                                                        <option value="last_12_month">Last 12 Months</option>
                                                                                                        <option value="this_year">This Year</option>
                                                                                                        <option value="last_year">Last Year</option>
                                                                                                        <option value="period">Period</option>
                                                                                                </select>
                                    <span class="text-danger" id="error_search_type"></span>
                                </div>
                            </div>



                                <div class="col-sm-3 col-md-3" id="date_result" style="display:none">
                                    <label>From Date</label>
                                <input autofocus="" type="date" value="<?php echo date('Y-m-d')?>" name="from_date" id="from_date" class="form-control form-control-sm" >
                                </div>

                                <div class="col-sm-3 col-md-3" id="date_result1" style="display:none">
                                    <label>To Date</label>
                                <input autofocus="" type="date" value="<?php echo date('Y-m-d')?>" name="to_date" id="to_date" class="form-control form-control-sm" >
                                </div>

                            <div class="col-sm-12 mt-1">
                                <div class="form-group">
                                    <button  name="search" value="search_filter" id="search_filter" class="btn btn-primary btn-sm checkbox-toggle pull-right"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">

                            <input type="hidden" name="ci_csrf_token" value="">               <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Search</label>
                                    <input autofocus="" type="text" value="" name="search_text" id="search_text" class="form-control form-control-sm" placeholder="Search by Income" autocomplete="off">

                                    <span class="text-danger" id="error_search_text"></span>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-2">
                                <div class="form-group">
                                    <button  name="search" value="search_full" id="search_full" class="btn btn-primary btn-sm checkbox-toggle pull-right" autocomplete="off"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>

                    </div>
                </div>

            </div>


    </div>
</div>
<!-- end page title -->

<div class="row mt-2">
    <div class="col-12">
        <div class="card">
            <div class="card-body"  id="show_result">

                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>SL</th>
                                <th>Name</th>
                                <th>Invoice Number</th>
                                <th>Income Head</th>
                                <th>Date</th>
                               <th>Amount</th>

                            </tr>
                        </thead>


                        <tbody>



                        </tbody>
                    </table>
                </div>
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
    $("select[name='search_type']").change(function(){
        var main_value = $(this).val();

            if(main_value == 'period'){


                $('#date_result').show();

                $('#date_result1').show();
            }else{


                $('#date_result').hide();

                $('#date_result1').hide();

            }


        });

  </script>


<script type="text/javascript">

    $(document).ready(function(){
       $("#search_filter").click(function(){

          var search_type_value = $("select[name='search_type'").val();
          var from_date = $("#from_date").val();
          var to_date = $("#to_date").val();


          $('#show_result').html('');

          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('admin.income_search')}}",
      type:"POST",
      data:{'search_type_value':search_type_value,'from_date':from_date,'to_date':to_date},
            //dataType:'json',
            success:function(data){
              console.log(data);
            //  $("#subcategory_area").hide();
              $('#show_result').html(data);
            },
            error:function(){
            //  toastr.error("Something went Wrong, Please Try again.");
           }
         });

      //end ajax


    });

    });
      </script>


<script type="text/javascript">

    $(document).ready(function(){
       $("#search_full").click(function(){


          var search_text = $("#search_text").val();

           var  search_full = 'search_full';

          $('#show_result').html('');

          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('admin.income_search')}}",
      type:"POST",
      data:{'search_text':search_text,'search_full':search_full},
            //dataType:'json',
            success:function(data){
              console.log(data);
            //  $("#subcategory_area").hide();
              $('#show_result').html(data);
            },
            error:function(){
            //  toastr.error("Something went Wrong, Please Try again.");
           }
         });

      //end ajax


    });

    });
      </script>

@endsection
