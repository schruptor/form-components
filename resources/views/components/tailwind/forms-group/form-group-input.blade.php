@if(isset($icon))
    <x-form-label
        {{ $attributes->merge(['class' => '']) }}
        label="{{ $label }}"
    />
    <div class="relative w-1/2">
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
        {{ $icon }}
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

    @endif
    <div class="static" id="{{ $groupName }}">
        <x-form-label
            {{ $attributes->merge(['class' => '']) }}
            label="{{ $label }}"
        />
        <x-form-input
            name="{{ $name }}"
            type="{{ $type }}"
            value="{{ $value }}"
            placeholder="{{ $placeholder }}"
            required="{{ $required }}"
        />
    </div>
@endif
