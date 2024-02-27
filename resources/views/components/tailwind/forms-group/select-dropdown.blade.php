<div {{ $attributes->merge(['class' => '']) }}>
    <x-form-label label="{{ $label }}"></x-form-label>

    <div class="pt-1">
        <div class="flex items-center border border-slate-400">
            @if(isset($icon))
                <span class="mr-2 border-r border-slate-400 bg-slate-200 p-2">
                    {{ $icon }}
                </span>
            @endif
            {{ $slot }}
        </div>
    </div>
</div>
