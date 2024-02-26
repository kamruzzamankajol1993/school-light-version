<option readonly vlaue="0">--- Select Student ---</option>

@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->id }}">{{ $value->student_name }}[{{ $value->student_roll }}]</option>
  @endforeach
     <option value="all">All</option>
@endif