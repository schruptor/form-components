<button type="button" id="{{ $id }}" {{ $attributes->merge(['class' => '']) }}>
    {{ $slot }}
</button>
