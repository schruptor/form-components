<input
    @if(str_contains('file',$type))
        {!! $attributes->merge(['class' => 'inline-block w-full rounded border p-5']) !!}
        accept="{{ $dataType }}"
    @else
        {!! $attributes->merge(['class' => 'inline-block w-full rounded border-2 pb-2 pl-3 pt-6']) !!}
    @endif

    id="{{ $id }}"
    type="{{ $type }}"
    name="{{ $name }}"
    value="{{ $value }}"
    placeholder="{{ $placeholder }}"

    @if($required)
        required
    @endif
/>

