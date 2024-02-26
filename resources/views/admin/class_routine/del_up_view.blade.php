<div class="row mt-3">

    <div class="col-md-12">


        <div class="table-responsive">
            <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                       <th>Class</th>
                                                       <th>Department</th>
                                                       <th>Section</th>
                                                       <th>Teacher</th>
                                                       <th>Subject</th>
                                                       <th>Day</th>
                                                       <th>Schedule</th>
                                                       <th>Room</th>

                                            <th>Action</th>
                                                    </tr>
                                                </thead>


                                                <tbody>
@foreach($productList_new as $user)
                                                    <tr>
                                                        <td>
                                                            @foreach ($class_details_new as $user_class)

                                                            @if($user->sreni_id == $user_class->id)


                                                            {{ $user_class->name }}

                                                                @endif
                                                            @endforeach

                                                        </td>

                                                         <td>
                                                            @foreach ($dp_details_new as $dp_class)

                                                            @if($user->department_id == $dp_class->id)


                                                            {{ $dp_class->name }}

                                                                @endif
                                                            @endforeach

                                                        </td>


                                                        <td>
                                                            @foreach ($section_details_new as $dp_class)

                                                            @if($user->section_id == $dp_class->id)


                                                            {{ $dp_class->name }}

                                                                @endif
                                                            @endforeach

                                                        </td>


                                                        <td>
                                                            @if($user->teacher_id == 0)
Class_teacher

                                                            @else
                                                            @foreach ($teacher_details_new as $dp_class)

                                                            @if($user->teacher_id == $dp_class->id)


                                                            {{ $dp_class->name }}

                                                                @endif
                                                            @endforeach
                        @endif
                                                        </td>

<td>{{ $user->subject_id }}</td>

<td>{{ $user->day }}</td>

<td>{{ $user->date }}</td>

<td>{{ $user->room }}</td>

                                             <td>



                                                @if (Auth::guard('admin')->user()->can('clr_update'))


                                                <button type="button" data-bs-toggle="modal" data-bs-target=".bs-example-modal-lg{{ $user->id }}"
                                                    class="btn btn-primary waves-light waves-effect  btn-sm" >
                                                    <i class="fas fa-pencil-alt"></i></button>

                                                    <div class="modal fade bs-example-modal-lg{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Class Routine Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                  </div>
                                                          <div class="modal-body">


                                                            <form class="custom-validation" action="{{ route('admin.class_routine.update') }}" method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                  <div class="row">

                                                                      <div class="col-lg-12">
                                                                          <div class="card">
                                                                              <div class="card-body">
                                  <div class="row">
                                  <div class="form-group col-md-6 col-sm-12">
                                                                                                  <label for="password">Class Name</label>
                                                                                      <select name="class_id"  class="form-control form-control-sm">
                                                                                          <option value="">Select Class</option>
                                                                         @foreach ($class_details_new as $user_class_update)
                                                       <option value="{{ $user_class_update->id }}" {{ $user->sreni_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                                          @endforeach
                                                                                                  </select>
                                                                                              </div>


                                                  <div class="form-group col-md-6 col-sm-12">
                                                                                                  <label for="password">Department Name</label>
                                                                                      <select name="department_id"  class="form-control form-control-sm">
                                                                                          <option readonly value="0">--- Select Department ---</option>
                                                                                               @foreach ($dp_details_new as $user_class_update)
                                                       <option value="{{ $user_class_update->id }}" {{ $user->department_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                                          @endforeach
                                                                                                  </select>
                                                                                              </div>

                                                                                              <div class="form-group col-md-6 col-sm-12">
                                                                                                  <label for="password">Section Name</label>
                                                                                      <select name="section_id"  class="form-control form-control-sm">
                                                                                                    @foreach ($section_details_new as $user_class_update)
                                                       <option value="{{ $user_class_update->id }}" {{ $user->section_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                                          @endforeach
                                                                                                  </select>
                                                                                              </div>
                                                                                              <div class="form-group col-md-6 col-sm-12">
                                                                                                  <label for="name">Teacher Name</label>
                                                                                                  <select name="teacher_id"  class="form-control form-control-sm">
                                                                                                      <option value="">Select Teacher Name</option>
                                                                                     @foreach ($teacher_details_new as $user_class_update)
                                                                   <option value="{{ $user_class_update->id }}" {{ $user->teacher_id == $user_class_update->id  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                                                      @endforeach
                                                                                      <option value="0" {{ $user->teacher_id == 0  ? 'selected' : '' }}>Class teacher</option>
                                                                                                              </select>
                                                                                                  <input type="hidden" class="form-control form-control-sm"  value="{{ $user->id }}" id="name" name="id" placeholder="Enter Name">
                                                                                              </div>

                                                                                              <div class="form-group col-md-6 col-sm-12">
                                                                                                <label for="name">Subject Name</label>
                                                                                                <select name="subject_id"  class="form-control form-control-sm">
                                                                                                    <option value="">Select Subject Name</option>
                                                                                   @foreach ($uniq_subject_details_new as $user_class_update)
                                                                 <option value="{{ $user_class_update->name }}" {{ $user->subject_id == $user_class_update->name  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                                                    @endforeach
                                                                                                            </select>

                                                                                            </div>

                                                                                            <div class="form-group col-md-6 col-sm-12">
                                                                                                <label for="name">Class Room</label>
                                                                                                <select name="room_new"  class="form-control form-control-sm">
                                                                                                    <option value="">Select Room</option>
                                                                                   @foreach ($class_room_details_new as $user_class_update)
                                                                 <option value="{{ $user_class_update->room_no }}" {{ $user->room == $user_class_update->room_no  ? 'selected' : '' }} >{{ $user_class_update->room_no }}</option>

                                                                                    @endforeach
                                                                                                            </select>

                                                                                            </div>

                                                                                            <div class="form-group col-md-6 col-sm-12">
                                                                                                <label for="name">Class Schedule</label>
                                                                                                <select name="date"  class="form-control form-control-sm">
                                                                                                    <option value="">Select Class Schedule</option>
                                                                                   @foreach ($class_schedule_details_new as $user_class_update)
                                                                 <option value="{{ $user_class_update->name }}" {{ $user->date == $user_class_update->name  ? 'selected' : '' }} >{{ $user_class_update->name }}</option>

                                                                                    @endforeach
                                                                                                            </select>

                                                                                            </div>



                                                                                            <div class="form-group col-md-6 col-sm-12">
                                                                                                <label>Day</label>
                                                                                                <select name="day"  class="form-control form-control-sm">
                                                                                                    <option value="">-----Select Day-----</option>

                                                                                                    <option value="Saturday" {{ $user->day == 'Saturday'  ? 'selected' : '' }}>Saturday</option>
                                                                                                    <option value="Sunday" {{ $user->day == 'Sunday'  ? 'selected' : '' }}>Sunday</option>
                                                                                                    <option value="Monday" {{ $user->day == 'Monday'  ? 'selected' : '' }}>Monday</option>
                                                                                                    <option value="Tuesday" {{ $user->day == 'Tuesday'  ? 'selected' : '' }}>Tuesday</option>
                                                                                                    <option value="Wednesday " {{ $user->day == 'Wednesday'  ? 'selected' : '' }}>Wednesday</option>
                                                                                                    <option value="ThursDay" {{ $user->day == 'ThursDay'  ? 'selected' : '' }}>ThursDay</option>
                                                                                                    <option value="Same class all week" {{ $user->day == 'Same class all week'  ? 'selected' : '' }}>Same class all week</option>



                                                                                                            </select>

                                                                                            </div>
                                                                                          </div>







                                                                              </div>

                                                                          </div>
                                                                      </div>



                                                                      <div class="col-lg-12">
                                                                          <div class="float-right d-none d-md-block">
                                                                              <div class="form-group mb-4">
                                                                                  <div>
                                                                                      <button type="submit" class="btn btn-primary btn-lg  waves-effect  btn-sm waves-light mr-1">
                                                                                         Update
                                                                                      </button>
                                                                                  </div>
                                                                              </div>
                                                                          </div>
                                                                      </div>
                                                                  </div> <!-- end col -->
                                                              </form>

                                                          </div>

                                                        </div>
                                                      </div>
                                                    </div>


                                                @endif



                                                @if (Auth::guard('admin')->user()->can('clr_delete'))

                                                <button   type="button" class="btn btn-danger waves-light waves-effect  btn-sm" onclick="deleteTag({{ $user->id}})" data-toggle="tooltip" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                                <form id="delete-form-{{ $user->id }}" action="{{ route('admin.class_routine.delete',$user->id) }}" method="POST" style="display: none;">
                                                  @method('DELETE')
                                                                                @csrf

                                                                            </form>
                                                @endif



                                            </td>
                                                     </tr>

                                                     @endforeach
                                                </tbody>
                                                </div>

    </div>

</div>

<script src="{{ asset('/') }}public/assets/libs/jquery/jquery.min.js"></script>

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
