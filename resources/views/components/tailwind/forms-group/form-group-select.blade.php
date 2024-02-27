<div>
    <x-form-label label="{{ $label }}"/>
    <span>
        @if($required)
            <x-form-select
                class="bg-yellow-50"
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
            <div {{ $attributes->merge(['class' => 'w-full border p-2']) }}>
                {{ $icon }}
            </div>
        @endif
    </span>
</div>
