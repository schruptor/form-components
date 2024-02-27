<x-form-group {{ $attributes->merge(['class' => 'form-group']) }} id="{{ $groupName }}">
    <x-form-label label="{{ $label }}"></x-form-label>
    <x-form-textarea
        id="{{ $id }}"
        name="{{ $name }}"
        rows="{{ $rows }}"
        required="{{ $required }}"
        style="resize: none;"
        text="{{ $text }}"
    />
</x-form-group>
