<div {{ $attributes->merge(['shadow-md border']) }}>
    @if(isset($icon) || isset($title))
    <div class="flex border-b p-2 shadow-sm">
        @if(isset($icon))
            {{ $icon }}
        @endif
        @if(isset($title))
                <span class="ml-2">{{ $title }}</span>
        @endif
    </div>
    @endif
    {{ $slot }}
</div>
