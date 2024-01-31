<textarea
    id="{{ $id }}"
    {{ $attributes->merge(['class' => 'resize-none border border-gray-300 bg-yellow-50 text-black w-full']) }}
    name="{{ $name }}"
    rows="{{ $rows }}"

    @if($required)
        required
    @endif
>
    {{ $text }}
</textarea>
