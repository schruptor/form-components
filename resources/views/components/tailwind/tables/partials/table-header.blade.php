<table id="{{ $id }}" {{ $attributes->merge(['class' => 'w-full border-2 bg-slate-100 font-semibold']) }}>
    <thead>
        <tr>
            {{ $slot }}
        </tr>
    </thead>
</table>
