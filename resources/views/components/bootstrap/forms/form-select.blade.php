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
    @if($options)
        <x-form-option :options="$options"></x-form-option>
    @else
        {{ $slot }}
    @endif
</select>
