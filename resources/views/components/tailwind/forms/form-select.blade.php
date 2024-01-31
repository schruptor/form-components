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
    {{ $slot }}
</select>
