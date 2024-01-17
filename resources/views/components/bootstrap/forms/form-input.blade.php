<input
    id="{{ $name }}"
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ $value }}"
    placeholder="{{ $placeholder }}"
    @if($required)
        required
    @endif
    {{ $attributes->merge(['class' => 'form-control']) }}
>
