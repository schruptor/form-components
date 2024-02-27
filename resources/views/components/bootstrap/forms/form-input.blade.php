<input
    @if(str_contains('file',  $type))
        {{ $attributes->merge(['class' => '']) }}
        accept="{{ $dataType }}"
    @else
        {{ $attributes->merge(['class' => 'form-control']) }}
    @endif

    type="{{ $type }}"
    id="{{ $id }}"
    name="{{ $name }}"
    value="{{ $value }}"
    placeholder="{{ $placeholder }}"

    @if($required)
        required
    @endif
>
