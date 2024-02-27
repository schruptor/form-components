@foreach($options as $option)
    <option :key="{{ $option['key'] }}" value="{{ $option['value'] }}" selected="{{ $option['selected'] }}">{{ $option['description'] }}</option>
@endforeach
