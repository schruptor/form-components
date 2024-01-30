<div {{ $attributes->merge(['class' => 'form-group']) }}>
    <x-form-label label="{{ $label }}"></x-form-label>
    <x-form-textarea
        id="{{ $id }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        required="{{ $required }}"
        style="resize: none;"
        text="{{ $text }}"
    />
</div>
