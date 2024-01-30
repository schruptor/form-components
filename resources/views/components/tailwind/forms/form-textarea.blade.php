<textarea
    id="{{ $id }}"
    {{ $attributes->merge(['class' => 'form-control']) }}
    name="{{ $name }}"
    rows="{{ $rows }}"
    style="resize: none;"

    @if($required)
        required
    @endif
>
    {{ $text }}
</textarea>
