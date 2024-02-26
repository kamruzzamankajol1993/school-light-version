@if(!empty($states))


    <option selected="" value="active" {{ $states == 'active' ? 'selected':'' }}>Active</option>
    <option value="passive" {{ $states == 'passive' ? 'selected':'' }}>Passive</option>
    <option value="dead" {{ $states == 'dead' ? 'selected':'' }}>Dead</option>
    <option value="won" {{ $states == 'won' ? 'selected':''}}>Won</option>
    <option value="lost" {{ $states== 'lost' ? 'selected':'' }}>Lost</option>
@endif
