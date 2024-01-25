<button id="{{ $id }}" {{ $attributes->merge(['class' => 'flex items-center rounded-full border border-slate-200 p-4 text-xl font-semibold shadow-md']) }}>
    <div>
        {{ $icon }}
    </div>
    {{ $text }}
</button>
