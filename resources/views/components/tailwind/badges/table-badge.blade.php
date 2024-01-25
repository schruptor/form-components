<div {{ $attributes->merge(['class' => 'border-l-4 border-orange-400 bg-yellow-200 p-4 font-semibold text-gray-600']) }}>
    @if($canScan)
        Bitte wählen oder scannen Sie einen Artikel...
    @else
        Bitte wählen Sie einen Artikel...
    @endif
</div>
