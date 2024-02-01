<div>
    <x-form-label label="{{ $label }}"></x-form-label>
    <x-form-textarea
        {{ $attributes->merge(['class' => '']) }}
        id="{{ $id }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        required="{{ $required }}"
        text="{{ $text }}"
    />
</div>
