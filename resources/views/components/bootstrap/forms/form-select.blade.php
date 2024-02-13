<select
    {{ $attributes->merge(['class' => 'form-control select2']) }}
    name="{{ $name }}"

    @if($multiple)
        multiple
    @endif

    @if($required)
        required
    @endif
>
    @if($options)
        @foreach($options as $option)
            <x-form-option :key="$option['key']" :value="$option['value']" :selected="$option['selected']">{{ $option['description'] }}</x-form-option>
        @endforeach
    @else
        {{ $slot }}
    @endif
</select>
