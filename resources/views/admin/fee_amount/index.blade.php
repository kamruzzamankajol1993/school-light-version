@extends('admin.master.master')

@section('title')
Fee Amount List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Fee Amount Information</h4>

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
                @if (Auth::guard('admin')->user()->can('fee_amount_add'))
                <button class="btn btn-primary dropdown-toggle waves-effect  btn-sm waves-light" type="button"
                    data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg">
                    <i class="far fa-calendar-plus  mr-2"></i> Add New Fee Amount
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
                                <th>Group Name</th>
                                <th>Fee Type</th>



                                <th>Action</th>
                            </tr>
                        </thead>

                        </tbody>
                        @foreach ($fee_amount_details as $user)
                           <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>

                                <?php $fee_group_name = DB::table('fee_groups')->where('id',$user->fee_group)->value('name'); ?>

                                {{ $fee_group_name}}


                            </td>
                            <td>
                                <?php $fee_code_list = DB::table('fee_amounts')->where('fee_group',$user->fee_group)->get(); ?>
                                <ul>
                                   @foreach($fee_code_list as $all_code_list)
                                    <li><i class="uil-money-bill"></i>
                                        <span style="padding-left: 5px;">{{ $all_code_list->fee_type }}.</span>
                                        <span style="padding-left: 5px;">৳. {{ $all_code_list->amount }}</span>
                                        <span style="padding-left: 5px;">

                                            @if (Auth::guard('admin')->user()->can('fee_amount_delete'))
                                            <i class="uil-multiply" style="color: red;" onclick="deleteTag({{ $all_code_list->id}})"></i>

                                            <form id="deleteform{{ $all_code_list->id }}"
                                                action="{{ route('admin.fee_amount_single.delete',$all_code_list->id) }}" method="POST"
                                                style="display: none;">
                                                @method('DELETE')
                                                @csrf

                                            </form>
 @endif

                                        </span>
                                        <span style="padding-left: 5px;">


                                            @if (Auth::guard('admin')->user()->can('fee_amount_delete'))

                                            <i class="uil-pen" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $all_code_list->id }}" style="color:green"></i>
                                            <div class="modal fade bs-example-modal-lg{{ $all_code_list->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Update Fee Amount  Information</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            </button>
          </div>
                                                    <div class="modal-body">
                                                        <form action="{{ route('admin.fee_amount.update') }}" method="POST" enctype="multipart/form-data">

                                                            @csrf
                                                            <input type="hidden" class="form-control form-control-sm" id="name" name="id" placeholder="Enter Name" value="{{ $all_code_list->id }}">
                                                            <div class="row">


                                                                <div class="form-group col-md-12 col-sm-12">
                                                                    <label for="name">Fee Group</label>

                                                                    <select class="form-control form-control-sm" id="name" name="fee_group">
                                                                        <option>--->Select Group<---</option>
                                                                        @foreach($fee_group_details as $all_data_list_new)

                                                                <option value="{{ $all_data_list_new->id }}" {{ $all_data_list_new->id == $all_code_list->fee_group ? 'selected':''  }}>{{ $all_data_list_new->name }}</option>

                                                                        @endforeach

                                                                    </select>



                                                                </div>

                                                                <div class="form-group col-md-12 col-sm-12">
                                                                    <label for="name">Fee Type</label>

                                                                    <select class="form-control form-control-sm" id="name" name="fee_type">
                                                                        <option>--->Select Type<---</option>
                                                                        @foreach($fee_type_details as $all_data_list_new)

                                                                        <option value="{{ $all_data_list_new->name }}" {{ $all_data_list_new->name == $all_code_list->fee_type ? 'selected':''  }}>{{ $all_data_list_new->name }}</option>

                                                                        @endforeach

                                                                    </select>



                                                                </div>


                                                                <div class="form-group col-md-12 col-sm-12">
                                                                    <label for="name">Due Date</label>
                                                                    <input type="date" value="{{ $all_code_list->due_date }}" class="form-control form-control-sm" id="name" name="due_date"
                                                                        placeholder="Enter Due Date">


                                                                </div>





                                                                <div class="form-group col-md-12 col-sm-12">
                                                                    <label for="name">Amount</label>
                                                                    <input type="text" class="form-control form-control-sm"
                                                                        id="amount_main" name="amount" value="{{ $all_code_list->amount }}" placeholder="Enter Amount"
                                                                        value="">


                                                                </div>
                                        <hr>

                                        <div class="form-group col-md-12 col-sm-12 mt-2">
                                            <label for="name">Fine Type:</label>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input aev_fora" {{ $all_code_list->fine_type == 'None' ? 'checked':''  }} type="radio" name="fine_type" id="fine_type1" value="None">
                                                <label class="form-check-label" for="fine_type1">None</label>
                                              </div>
                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input aev_fora" type="radio" name="fine_type" {{ $all_code_list->fine_type == 'Percentage' ? 'checked':''  }} id="fine_type2" value="Percentage">
                                                <label class="form-check-label" for="fine_type2">Percentage</label>
                                              </div>

                                              <div class="form-check form-check-inline">
                                                <input class="form-check-input aev_fora" type="radio" name="fine_type" {{ $all_code_list->fine_type == 'Fix Amount' ? 'checked':''  }} id="fine_type3" value="Fix Amount">
                                                <label class="form-check-label" for="fine_type3">Fix Amount</label>
                                              </div>


                                        </div>

                                        <div class="form-group col-md-6 col-sm-6">
                                            <label for="name">Percentage</label>
                                            <input type="number" class="form-control form-control-sm"
                                                id="percen" name="percen" placeholder="Enter Percentage"
                                                value="{{ $all_code_list->percen}}">


                                        </div>

                                        <div class="form-group col-md-6 col-sm-12">
                                            <label for="name">Fine Amount</label>
                                            <input type="number" class="form-control form-control-sm"
                                                id="fine_amount" name="fine_amount" placeholder="Enter Fine Amount"
                                                value="{{ $all_code_list->fine_amount}}">


                                        </div>

                                                            </div>





                                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                                                        </form>
                                                    </div>

                                                  </div>
                                                </div>
                                              </div>
@endif
                                        </span>
                                    </li>
                                    @endforeach
                                </ul>


                            </td>
                            <td>



                                @if (Auth::guard('admin')->user()->can('fee_amount_update'))
                                          <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lgrr{{ $user->fee_group }}"
                                          class="btn btn-primary waves-light waves-effect  btn-sm" >
                                          <i class="uil-list-ui-alt"></i></button>

                                          <div class="modal fade bs-example-modal-lgrr{{ $user->fee_group}}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Student To This Group</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
        </button>
      </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('assign_student_to_fee_group') }}" method="POST" enctype="multipart/form-data">

                                                        @csrf
                                                        <input type="hidden" class="form-control form-control-sm" id="name" name="fee_group_id" placeholder="Enter Name" value="{{ $user->fee_group }}">
                                                        <div class="row">


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Class Name</label>
                                                    <select name="class_id"  class="form-control form-control-sm">
                                                        <option value="">Select Class</option>
                                       @foreach ($class_details as $user_class_update)
                                 <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>


                <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Department Name</label>
                                                    <select name="department_id"  class="form-control form-control-sm">

                                                                </select>
                                                            </div>



                                                        </div>





                                                        <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Update</button>
                                                    </form>
                                                </div>

                                              </div>
                                            </div>
                                          </div>
@endif


                                @if (Auth::guard('admin')->user()->can('fee_amount_delete'))

        <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
            onclick="deleteTag({{ $user->fee_group}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                <form id="deleteform{{ $user->fee_group }}"
                                    action="{{ route('admin.fee_amount.delete',$user->fee_group) }}" method="POST"
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
                <h5 class="modal-title" id="myLargeModalLabel">Add Fee Amount </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.fee_amount.store') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <div class="row">

                        <div class="form-group col-md-12 col-sm-12">
                            <label for="name">Fee Group</label>

                            <select class="form-control form-control-sm" id="name" name="fee_group">
                                <option>--->Select Group<---</option>
                                @foreach($fee_group_details as $all_data_list_new)

                                <option value="{{ $all_data_list_new->id }}">{{ $all_data_list_new->name }}</option>

                                @endforeach

                            </select>



                        </div>

                        <div class="form-group col-md-12 col-sm-12">
                            <label for="name">Fee Type</label>

                            <select class="form-control form-control-sm" id="name" name="fee_type">
                                <option>--->Select Type<---</option>
                                @foreach($fee_type_details as $all_data_list_new)

                                <option value="{{ $all_data_list_new->name }}">{{ $all_data_list_new->name }}</option>

                                @endforeach

                            </select>



                        </div>


                        <div class="form-group col-md-12 col-sm-12">
                            <label for="name">Due Date</label>
                            <input type="date" class="form-control form-control-sm" id="name" name="due_date"
                                placeholder="Enter Due Date">


                        </div>





                        <div class="form-group col-md-12 col-sm-12">
                            <label for="name">Amount</label>
                            <input type="text" class="form-control form-control-sm"
                                id="amount_main" name="amount" placeholder="Enter Amount"
                                value="">


                        </div>
<hr>
                        <div class="form-group col-md-12 col-sm-12 mt-2">
                            <label for="name">Fine Type:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input aev_fora" type="radio" name="fine_type" id="fine_type1" value="None">
                                <label class="form-check-label" for="fine_type1">None</label>
                              </div>
                              <div class="form-check form-check-inline">
                                <input class="form-check-input aev_fora" type="radio" name="fine_type" id="fine_type2" value="Percentage">
                                <label class="form-check-label" for="fine_type2">Percentage</label>
                              </div>

                              <div class="form-check form-check-inline">
                                <input class="form-check-input aev_fora" type="radio" name="fine_type" id="fine_type3" value="Fix Amount">
                                <label class="form-check-label" for="fine_type3">Fix Amount</label>
                              </div>


                        </div>

                        <div class="form-group col-md-6 col-sm-6">
                            <label for="name">Percentage</label>
                            <input type="number" class="form-control form-control-sm"
                                id="percen" name="percen" placeholder="Enter Percentage"
                                value="">


                        </div>

                        <div class="form-group col-md-6 col-sm-12">
                            <label for="name">Fine Amount</label>
                            <input type="number" class="form-control form-control-sm"
                                id="fine_amount" name="fine_amount" placeholder="Enter Fine Amount"
                                value="">


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
