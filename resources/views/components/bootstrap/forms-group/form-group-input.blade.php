<div {{ $attributes->merge(['class' => 'form-group']) }} id="{{ $groupName }}">
    <x-form-label label="{{ $label }}"></x-form-label>
    @if(isset($icon))
        <div class="input-icon icon-right">
            @if(str_contains('price', $name))
                <x-form-input
                    class="autoNumeric-euro-min0"
                    name="{{ $name }}"
                    type="{{ $type }}"
                    value="{{ $value }}"
                    placeholder="{{ $placeholder }}"
                    required="{{ $required }}"
                />
            @else
                <x-form-input
                    name="{{ $name }}"
                    type="{{ $type }}"
                    value="{{ $value }}"
                    placeholder="{{ $placeholder }}"
                    required="{{ $required }}"
                />
            @endif
            <i class="{{ $icon }} circular {{ $color }}"></i>
        </div>
    @else
        @if(str_contains('price', $name))
            <x-form-input
                class="autoNumeric-euro-min0"
                name="{{ $name }}"
                type="{{ $type }}"
                value="{{ $value }}"
                placeholder="{{ $placeholder }}"
                required="{{ $required }}"
            />
        @else
            <x-form-input
                name="{{ $name }}"
                type="{{ $type }}"
                value="{{ $value }}"
                placeholder="{{ $placeholder }}"
                required="{{ $required }}"
            />
        @endif
    @endif
</div>
