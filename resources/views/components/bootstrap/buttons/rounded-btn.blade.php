<button id="{{ $id }}" {{ $attributes->merge(['class' => 'btn btn-lg btn-default shiny']) }}>
    @if(isset($icon))
        <i class="{{ $icon }}" style="font-size:18px;margin-right:2px;"></i>
    @endif
     {{ $slot }}
</button>
