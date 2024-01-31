<label class="relative cursor-pointer">
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="checkbox"
        class="sr-only peer" />
    <div
        {{$attributes->merge([
            'class' => 'w-11 h-5 flex items-center border rounded-full peer peer-checked:after:translate-x-full after:absolute after:left-0 peer-checked:after:-left-1 after:bg-white after:border after:border-gray-300 peer-checked:after:border-green-500 after:rounded-full after:h-6 after:w-6 after:transition-all peer-checked:bg-green-500'
        ]) }}>
        @if($isActive)
            <div class="m-2 text-xs uppercase text-white">{{ $defaultYes }}</div>
        @else
            <div class="m-7 text-xs uppercase text-gray-500">{{ $defaultNo }}</div>
        @endif
    </div>
</label>
