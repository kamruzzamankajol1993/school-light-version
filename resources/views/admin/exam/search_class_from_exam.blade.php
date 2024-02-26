<option readonly value="0">--- Select Class ---</option>
@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->id }}">{{ $value->name }}</option>
  @endforeach
@endif
