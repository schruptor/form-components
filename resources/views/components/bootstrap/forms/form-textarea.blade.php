<textarea
    {{ $attributes->merge(['class' => 'form-control']) }}
    id="{{ $id }}"
    name="{{ $description }}"
    rows="{{ $rows }}"

    @if($required)
        required
    @endif
>
    {{ $TextareaValue }}
</textarea>
