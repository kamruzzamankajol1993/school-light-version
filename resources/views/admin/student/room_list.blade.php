<option readonly value="0">--- Select Room Number ---</option>
@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->number_or_name }}">{{ $value->number_or_name }}</option>
  @endforeach
@endif
