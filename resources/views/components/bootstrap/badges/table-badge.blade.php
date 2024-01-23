<div {{ $attributes->merge(['class' => '']) }}>
    @if($canScan)
        Bitte wählen oder scannen Sie einen Artikel...
    @else
        Bitte wählen Sie einen Artikel...
    @endif
</div>

