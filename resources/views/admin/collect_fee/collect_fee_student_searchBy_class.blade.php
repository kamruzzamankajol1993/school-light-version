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

                            <th>Student Name</th>
                            <th>Branch</th>

                            <th>Current Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
@foreach($student_list as $all_search_list)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>

                            <td>{{ $all_search_list->first_name.''.$all_search_list->last_name }}</td>
                            <td>{{ $all_search_list->student_house }}</td>

                            <td>{{ $all_search_list->mobile_number }}</td>
                            <td>@if (Auth::guard('admin')->user()->can('student_view'))

                                <a type="button" href="{{ route('collect_fee_list',$all_search_list->id) }}"
                                    class="btn btn-success waves-light waves-effect  btn-sm" >
                                    <i class="fas fa-eye"></i></a>

                                @endif</td>
                        </tr>

                @endforeach
                    </tbody>


                </table>
            </div>
        </div>
    </div>
</div> <!-- end col -->
