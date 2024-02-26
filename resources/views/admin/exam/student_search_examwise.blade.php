<div class="table-responsive">
    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Admission No</th>
                <th>Roll Number</th>

                <th>Remark</th>

            </tr>
        </thead>
    <tbody>
        @foreach($states as $all_states)
        <tr>
         <td>

             {{ $all_states->first_name.' '.$all_states->last_name }}
            </td>
        <td>
            {{ $all_states->admission_no}}

        </td>
        <td>
            {{ $all_states->roll_number}}

        </td>

        <td>
            <input class="form-control form-control-sm" type="hidden" value="{{ $all_states->id}}" name="student_id[]" />

            <?php  $collect_comment = DB::table('teacher_remarks')
                      ->where('student_id',$all_states->id)
                      ->where('session',$all_states->session_year)->value('comment');
                      ?>
                      @if(empty($collect_comment))
            <input class="form-control form-control-sm" type="text" value="" name="comment[]" />
@else

<input class="form-control form-control-sm" type="text" value="{{ $collect_comment }}" name="comment[]" />
@endif
        </td>


        </tr>
        @endforeach
        </tbody>

    </table>
</div>
