<button
    id="{{ $id }}"
    {{ $attributes->merge(['class' => 'flex items-center rounded-full border border-slate-200 p-4 text-xl font-semibold shadow-md']) }}>
    @if(isset($icon))
        <div>
            {{ $icon }}
        </div>
    @endif
    {{ $slot }}
</button>
