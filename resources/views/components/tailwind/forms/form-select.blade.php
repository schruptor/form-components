<select
    {{ $attributes->merge(['class' => 'w-full border p-2']) }}
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
            <x-form-option :key="$option['key']" :value="$option['value']" :selected="$option['selected']" />
        @endforeach
    @else
        {{ $slot }}
    @endif
</select>
