<input
    {!! $attributes->merge(['class' => 'inline-block w-full rounded border-2 pb-2 pl-3 pt-6']) !!}
    value="{{ $value }}"
    name="{{ $name }}"
    id="{{ $name }}"
    type="{{ $type }}"
    placeholder="{{ $placeholder }}"
    @if($required)
        required
    @endif
/>
