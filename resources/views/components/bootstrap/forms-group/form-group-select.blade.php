<div {{ $attributes->merge(['class' => 'form-group']) }}>
    <x-form-label label="{{ $label }}"/>
    <span class="input-icon icon-right">
        @if($required)
            <x-form-select
                class="required"
                multiple="{{ $multiple }}"
                required="{{ $required }}"
                name="{{ $name }}"
            >
                {{ $slot }}
            </x-form-select>
        @else
            <x-form-select
                multiple="{{ $multiple }}"
                required="{{ $required }}"
                name="{{ $name }}"
            >
                {{ $slot }}
            </x-form-select>
        @endif

        @if(isset($icon))
            <i class="{{ $icon }} circular {{ $color }}"></i>
        @endif
    </span>
</div>
