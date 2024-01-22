<a
    href="{{ $url }}"
    {!! $attributes->merge(['class' => 'border rounded pt-2 pb-2 w-full']) !!}
>
    {{ $slot }}
</a>
