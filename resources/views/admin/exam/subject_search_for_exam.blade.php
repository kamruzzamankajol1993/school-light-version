<div class="table-responsive">
    <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap"
        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
        <thead>
            <tr>
                <th>Subject</th>
                <th>Date</th>
                <th>Time</th>
                <th>Duration</th>
                <th>Room No</th>
                <th>Marks (Max..)</th>
                <th>Marks (Min..)</th>
            </tr>
        </thead>
    <tbody>
        @foreach($states as $all_states)
        <tr>
         <td>
            <input type="hidden" value="{{ $all_states->id }}" name="subject_id[]" />
             <input class="form-control form-control-sm" type="text" value="{{ $all_states->name }}" name="subject[]" />
            </td>
        <td><input class="form-control form-control-sm" type="date" value="<?php echo date('Y-m-d')?>" name="date[]" /></td>
        <td><input class="form-control form-control-sm" type="time" value="" name="time[]" /></td>

        <td><input class="form-control form-control-sm" type="text" value="" name="duration[]" /></td>

        <td><input class="form-control form-control-sm" type="text" value="" name="room_no[]" /></td>

        <td><input class="form-control form-control-sm" type="text" value="" name="mark_max[]" /></td>
        <td><input class="form-control form-control-sm" type="text" value="" name="mark_min[]" /></td>
        </tr>
        @endforeach
        </tbody>

    </table>
</div>
