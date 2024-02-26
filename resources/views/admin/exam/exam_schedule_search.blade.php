<div class="row mt-3">
    @include('flash_message')
    <div class="col-12">
        <div class="card">
            <div class="card-body">


                <div class="table-responsive">
                    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Subject</th>
                                <th>Date From</th>
                                <th>Start Time</th>
                                <th>Duration</th>
                                <th>Room No</th>
                                <th>Marks(Max..)</th>
                                <th>Marks(Min..)</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>

                            @foreach($exam_schedule as $class_exam_schedule)
                            <tr>
                                <td>


                                    <?php  $subject_name = DB::table('subjects')->where('id',$class_exam_schedule->subject_id)->value('name'); ?>


                                    {{ $subject_name}}


                                </td>
                                <td>


                                    {{ date('d/m/Y', strtotime($class_exam_schedule->date))}}




                                </td>
                                <td>



                                    {{ $class_exam_schedule->time }}


                                </td>
                                <td>{{ $class_exam_schedule->duration }}</td>
                                <td>{{ $class_exam_schedule->room_no }}</td>
                                <td>{{ $class_exam_schedule->mark_max }}</td>
                                <td>{{ $class_exam_schedule->mark_min }}</td>
                                <td>

                                    @if (Auth::guard('admin')->user()->can('exam_schedule_update'))
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target=".bs-example-modal-lg{{ $class_exam_schedule->id }}"
                                        class="btn btn-primary waves-light waves-effect  btn-sm">
                                        <i class="fas fa-pencil-alt"></i></button>

                                    <div class="modal fade bs-example-modal-lg{{ $class_exam_schedule->id }}"
                                        tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Update
                                                        Information</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{ route('exam_schedule_update') }}" method="POST"
                                                        enctype="multipart/form-data">

                                                        @csrf
                                                        <div class="row">

                                                            <div class="form-group col-md-12 col-sm-12">
                                                                <label for="password">Subject</label>
                                                                <select name="subject_id"
                                                                    class="form-control form-control-sm">
                                                                    <option value="">---->Select Subject<----</option>
                                                                            @foreach($subject_list as $all_session)
     <option value="{{ $all_session->id }}" {{ $all_session->id == $class_exam_schedule->subject_id ? 'selected':'' }}>{{ $all_session->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Date</label>
                                                                <input class="form-control form-control-sm" type="date" value="{{ $class_exam_schedule->date }}" name="date" />
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Time</label>
                                                                <input class="form-control form-control-sm" type="time" value="{{$class_exam_schedule->main_time}}" name="time" />
                                                            </div>

                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Duration</label>
                                                                <input class="form-control form-control-sm" type="text" value="{{$class_exam_schedule->duration}}" name="duration" />
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Room No</label>
                                                                <input class="form-control form-control-sm" type="text" value="{{$class_exam_schedule->room_no}}" name="room_no" />
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Mark(Max..)</label>
                                                                <input class="form-control form-control-sm" type="text" value="{{$class_exam_schedule->mark_max}}" name="mark_max" />
                                                            </div>


                                                            <div class="form-group col-md-6 col-sm-12">
                                                                <label for="password">Mark(Min..)</label>
                                                                <input class="form-control form-control-sm" type="text" value="{{$class_exam_schedule->mark_min}}" name="mark_min" />
                                                                <input class="form-control form-control-sm" type="hidden" value="{{$class_exam_schedule->id}}" name="id" />
                                                            </div>

                                                        </div>





                                                        <button type="submit"
                                                            class="btn btn-sm btn-primary mt-4 pr-4 pl-4">Update</button>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @if (Auth::guard('admin')->user()->can('exam_schedule_delete'))

                                    <button type="button" class="btn btn-danger waves-light waves-effect  btn-sm"
                                        onclick="deleteTag({{ $class_exam_schedule->id}})" data-toggle="tooltip"
                                        title="Delete"><i class="fas fa-trash-alt"></i></button>
                                    <form id="delete-form-{{ $class_exam_schedule->id }}"
                                        action="{{ route('admin.exam_schedule.delete',$class_exam_schedule->id) }}"
                                        method="POST" style="display: none;">
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
    </div>
</div>
