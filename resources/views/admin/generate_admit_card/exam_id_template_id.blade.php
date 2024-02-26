<option readonly value="0">--- Select Template ---</option>
@if(!empty($states))
  @foreach($states as $value)
    <option value="{{ $value->id }}">{{ $value->template }}</option>
  @endforeach
@endif
