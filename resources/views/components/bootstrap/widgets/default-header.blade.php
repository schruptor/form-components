<div {{ $attributes->merge(['class' => 'widget']) }}>
    @if(isset($icon) || isset($title))
        <div class="widget-header bordered-bottom">
            @if(isset($icon))
                <i class="widget-icon {{ $icon }}"></i>
            @endif
            @if(isset($title))
                <span class="widget-caption">{{ $title }}</span>
            @endif
        </div>
    @endif

    {{ $slot }}

</div>
