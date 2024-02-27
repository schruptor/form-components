<button
    {{ $attributes->merge([
        'class' => 'border rounded pt-2 pb-2 w-full',
        'type' => 'submit'
    ]) }}>
        {{ $slot }}
</button>
