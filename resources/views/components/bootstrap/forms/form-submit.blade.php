<button {!! $attributes->merge(['class' => 'btn btn-block', 'type' => 'submit']) !!}>
    {{ $slot }}
</button>
