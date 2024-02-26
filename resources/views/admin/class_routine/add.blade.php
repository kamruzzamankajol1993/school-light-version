@extends('admin.master.master')

@section('title')
Add Class Routine  | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

 <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title-box">
                                <h4 class="font-size-18">Add Class Routine </h4>
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Resnova</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Add Class Routine </a></li>

                                </ol>
                            </div>
                        </div>


                    </div>
                    <!-- end page title -->

                    <div class="row mt-3">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    @include('flash_message')
                                    <form method="get" action="{{ route('result_search') }}">
                                        <div class="row align-items-center">
                <!--filter code -->

                <div class="form-group col-md-4 col-sm-12">
                    <label>Class</label>

                                                                    <select name="class_id"  class="form-control form-control-sm">
                                                                        <option value="">-----Select Class-----</option>
                                                       @foreach ($class_details as $user_class_update)
                    <option value="{{ $user_class_update->id }}" >{{ $user_class_update->name }}</option>

                                                        @endforeach
                                                                                </select>
                                                                            </div>


                                <div class="form-group col-md-4 col-sm-12">
                                    <label>Department</label>
                                                                    <select name="department_id"  class="form-control form-control-sm">


                                                                                </select>
                                                                            </div>

                                                                            <div class="form-group col-md-4 col-sm-12">
                                                                                <label>Section</label>
                                                                    <select name="section_id"  class="form-control form-control-sm">

                                                                                </select>
                                                                            </div>





                <div class="col-sm-6">
                </div>

                                                                            <div class="col-sm-6">
                                            <div class="float-right d-md-block">
                                                <div class="dropdown">

                <button class="btn btn-primary waves-effect  btn-sm waves-light" type="submit">
                                                        <i class="far fa-calendar-plus  mr-2"></i> Search
                                                    </button>

                                                </div>
                                            </div>
                                        </div>

                                  <!--filter code -->
                                    </div>
                                    <!-- end page title -->
                </form>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->



                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->



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
                    document.getElementById('delete-form-'+id).submit();
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
@endsection







