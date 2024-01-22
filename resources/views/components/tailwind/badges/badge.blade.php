<div class="flex">
    <div class="w-1/2">
        <div class="bg-{{ $color }}-400 text-white font-semibold border-l-4 border-{{ $color }}-500 p-2 rounded shadow-lg">
            @if(isset($number))
                <span class="mr-1 font-bold bg-{{ $color }}-500 rounded-full pt-1 pb-1 pl-2 pr-2 text-xs">{{ $number }}</span> {{ $text }}
            @else
                {{ $text }}
            @endif
        </div>
    </div>
</div>
