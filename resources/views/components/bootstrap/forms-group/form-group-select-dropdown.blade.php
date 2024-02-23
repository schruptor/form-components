<x-form-group {{ $attributes->merge(['class' => '']) }} id="{{ $groupName }}">
    <x-form-label label="{{ $label }}"></x-form-label>

    <div class="controls">
        <div class="input-group">
            @if(isset($icon))
                <span class="input-group-addon">
                    <i class="{{ $icon }}"></i>
                </span>
            @endif
            {{ $slot }}
        </div>
    </div>
</x-form-group>