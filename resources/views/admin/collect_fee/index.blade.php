@extends('admin.master.master')

@section('title')
Student Information | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')
<!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Student List</h4>

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
    <div class="col-md-12">
        <div class="card box-primary">

            <div class="card-body">
                <h3 class="card-title"><i class="fa fa-search"></i> Select Criteria</h3>
                <div class="row">
                    <div class="col-md-8">
{{-- <form action="{{ route('admin.search_session_wise_all') }}" method="post"/>
@csrf --}}

                            <div class="row">

                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Branch</label>
                                        <select name="class_id" class="form-control form-control-sm" id="class_id">
                                            <option value="">Select Branch</option>
                                            @foreach ($class_details as $user_class_update)
                                            <option value="{{ $user_class_update->id }}">
                                                {{ $user_class_update->name }}</option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-12 mt-3">
                                    <div class="form-group">
                                        <button type="submit" id="serach_by_pass_yearall" name="search"  value="search_filter"
                                            class="btn btn-primary btn-sm pull-right checkbox-toggle"><i
                                                class="fa fa-search"></i> Search</button>
                                    </div>
                                </div>
                            </div>


                </div>
                <!--./col-md-6-->
                <div class="col-md-4">
                    <div class="row">



                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label>Search By Keyword</label>
                                    <input type="text" name="search_text_admission" value="" class="form-control form-control-sm"
                                        placeholder="Search By Student Name, Roll Number, Admission Number" id="student_admission_number">
                                </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <div class="form-group">
                                    <button type="submit" name="search" id="search_by_admission_no" value="search_full"
                                        class="btn btn-primary pull-right btn-sm checkbox-toggle"><i
                                            class="fa fa-search"></i> Search</button>
                                </div>
                            </div>

                    </div>
                </div>
                <!--./col-md-6-->
            </div>
            <!--./row-->
        </div>
    </div>
</div>
</div>
<!-- end page title -->

<div class="row mt-2" id="show_result">



</div> <!-- end row -->







@endsection

@section('script')

<script type="text/javascript">

    $(document).ready(function(){
       $("#serach_by_pass_yearall").click(function(){


          var class_id = $("select[name='class_id'").val();
          var section_id = $("select[name='section_id'").val();
          var department_id = $("select[name='department_id'").val();

          $('#show_result').html('');

          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('collect_fee_student_searchBy_class')}}",
      type:"POST",
      data:{'class_id':class_id,'section_id':section_id,'department_id':department_id},
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
       $("#search_by_admission_no").click(function(){


        var student_admission_number = $("#student_admission_number").val();

          $('#show_result').html('');

          $.ajax({
       headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      },
      url:"{{route('collect_fee_student_searchBy_name')}}",
      type:"POST",
      data:{'student_admission_number':student_admission_number},
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
