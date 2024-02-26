<option readonly value="0">--- Select Name ---</option>
@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->id }}">{{ $value->first_name.''.$value->last_name }}</option>
  @endforeach
  <option value="all">All</option>
@endif
