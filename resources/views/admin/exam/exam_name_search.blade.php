<option readonly value="0">---> Select Exam Name <---</option>
@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->id }}">{{ $value->exam_name }}</option>
  @endforeach
@endif
