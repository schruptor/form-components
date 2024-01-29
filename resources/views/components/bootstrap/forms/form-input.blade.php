@if(str_contains('file',$type))
    <input
        {{ $attributes->merge(['class' => '']) }}
        id="{{ $name }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
        accept="{{ $dataType }}"

        @if($required)
            required
        @endif
    >
@else
    <input
        {{ $attributes->merge(['class' => 'form-control']) }}
        id="{{ $name }}"
        type="{{ $type }}"
        name="{{ $name }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"

        @if($required)
            required
        @endif
    >
@endif
