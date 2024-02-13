<textarea
    {{ $attributes->merge(['class' => 'form-control']) }}
    id="{{ $id }}"
    name="{{ $name }}"
    rows="{{ $rows }}"

    @if($required)
        required
    @endif
>{{ $text }}</textarea>
