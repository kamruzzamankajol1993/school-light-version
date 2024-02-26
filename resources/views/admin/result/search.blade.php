@extends('admin.master.master')

@section('title')
Result List | {{ $ins_name }}
@endsection


@section('css')

@endsection

@section('body')

<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0">Result Information</h4>

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
                                @if (Auth::guard('admin')->user()->can('result_create'))
<a  href="{{ route('admin.result.create') }}" class="btn btn-primary waves-effect waves-light" type="button">
                                        <i class="far fa-calendar-plus  mr-2"></i> Add New Result
                                    </a>
@endif
                                </div>
                            </div>
                        </div>
                        </div>
                        <form method="get" action="{{ route('result_search') }}">
                        <div class="row align-items-center mt-3">
<!--filter code -->

<div class="form-group col-md-2 col-sm-12">

                                                    <select name="class_id"  class="form-control">
                                                        <option value="">--Select Class--</option>
                                       @foreach ($class_details as $user_class_update)
    <option value="{{ $user_class_update->id }}" {{ $user_class_update->id == $sreni_id ? 'selected':''}}>{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>


                <div class="form-group col-md-2 col-sm-12">

                                                    <select name="department_id"  class="form-control">
                                                        <option readonly value="0">--- Select Department ---</option>
                                                           @foreach ($dp_details as $user_class_update)
                     <option value="{{ $user_class_update->id }}" {{ $user_class_update->id == $department_id ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-2 col-sm-12">

                                                    <select name="section_id"  class="form-control">
                                                    @foreach ($section_details as $user_class_update)
                     <option value="{{ $user_class_update->id }}" {{ $user_class_update->id == $section_id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>

                                                             <div class="form-group col-md-2 col-sm-12">

                                                    <select name="subject_id"  class="form-control">

                                         <option value="all" {{ 'all' == $subject_id ? 'selected' : '' }} >All</option>
                                                      @foreach ($subject_details as $user_class_update)
                     <option value="{{ $user_class_update->id }}" {{ $user_class_update->id == $subject_id ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>

                                                         <div class="form-group col-md-2 col-sm-12">

                                                    <select name="students_id"  class="form-control">
                                     <option value="all" {{ 'all' == $students_id ? 'selected' : '' }} >All</option>
                                                @foreach ($student_details as $user_class_update)
                     <option value="{{ $user_class_update->id }}" {{ $user_class_update->id == $students_id ? 'selected' : '' }} >{{ $user_class_update->student_name }}</option>

                                        @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-2 col-sm-12">

                                                    <select name="exam_id"  class="form-control">
                                                        <option>---  Select Exam---</option>
                                                @foreach($exam_details as $exam_details)
    <option value="{{ $exam_details->id }}" {{ $exam_id == $exam_details->id  ? 'selected' : '' }}>{{ $exam_details->exam_name }}({{ $exam_details->year }})</option>
                                                             @endforeach
                                                                </select>
                                                            </div>
<div class="col-sm-11">
</div>

                                                            <div class="col-sm-1 mt-3">
                            <div class="float-right d-md-block">
                                <div class="dropdown">
                                @if (Auth::guard('admin')->user()->can('result_create'))
<button class="btn btn-primary waves-effect waves-light" type="submit">
                                        <i class="far fa-calendar-plus  mr-2"></i> Search
                                    </button>
@endif
                                </div>
                            </div>
                        </div>

                  <!--filter code -->
                    </div>
                    <!-- end page title -->
</form>
                    <div class="row mt-3">
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
                                     <th>Class </th>
                                     <th>Section </th>
                                    <th>Roll No</th>
                                    <th>Subject</th>
                                    <th>MCQ</th>
                                    <th>Written</th>
                                    <th>Practical</th>
                                     <th>Total Mark</th>
                                    <th>Action</th>
                                            </tr>
                                        </thead>


                                        <tbody>
                                            @foreach ($result_details as $user)


                                <tr>
                                   <td>{{ $loop->index+1 }}</td>

                                <td>
                                    @foreach ($class_details as $user_class)

                                    @if($user->sreni_id == $user_class->id)


                                    {{ $user_class->name }}

                                        @endif
                                    @endforeach

                                </td>

                                 <td>
                                    @foreach ($section_details as $dp_class)

                                    @if($user->section_id == $dp_class->id)


                                    {{ $dp_class->name }}

                                        @endif
                                    @endforeach

                                </td>
                                   <td>




  {{ $user->roll }}



                                    </td>

                                    <td>




  @foreach ($subject_details as $dp_class)

                                    @if($user->subject_id == $dp_class->id)


                                    {{ $dp_class->name }}

                                        @endif
                                    @endforeach



                                    </td>
                                    <td>{{ $user->mcq_exam }}</td>
                                     <td>{{ $user->written_exam }}</td>

                                   <td>{{ $user->prac_exam }}</td>
                                      <td>{{ $user->main_total }}</td>
                                    <td>
                                      @if (Auth::guard('admin')->user()->can('result_edit'))

                    <a type="button" href="{{ route('admin.result.edit',$user->id) }}"  class="btn btn-primary waves-light waves-effect" >
                                          <i class="fas fa-pencil-alt"></i></a>




@endif





                                  @if (Auth::guard('admin')->user()->can('result_delete'))

<button   type="button" class="btn btn-danger waves-light waves-effect" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                    <form id="delete-form-{{ $user->id }}" action="{{ route('admin.result.delete',$user->id) }}" method="POST" style="display: none;">
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







