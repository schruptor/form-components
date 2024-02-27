<div>
    <x-form-label label="{{ $label }}"></x-form-label>
    <x-form-toggle
        {{ $attributes->merge(['class' => '']) }}
        id="{{ $id }}"
        name="{{ $name }}"
        isActive="{{ $isActive }}"
        defaultYes="{{ $defaultYes }}"
        defaultNo="{{ $defaultNo }}"
    />
</div>
