<select
    {{ $attributes->merge(['class' => 'form-control select2']) }}
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
