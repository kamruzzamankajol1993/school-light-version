<option readonly vlaue="0">--- Select Student ---</option>

@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->id }}">{{ $value->first_name.''.$value->last_name }}[{{ $value->roll_number }}]</option>
  @endforeach
     <option value="all">All</option>
@endif
