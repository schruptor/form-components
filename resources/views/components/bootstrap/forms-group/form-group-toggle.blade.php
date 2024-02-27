<x-form-group {{ $attributes->merge(['class' => 'form-group']) }} id="{{ $groupName }}">
    <x-form-label label="{{ $label }}"></x-form-label>
    <br>
    <label class="position-relative checkbox-label" style="line-height:15px;">
        <x-form-toggle
            id="{{ $id }}"
            name="{{ $name }}"
            defaultYes="{{ $defaultYes }}"
            defaultNo="{{ $defaultNo }}"
            isActive="{{ $isActive }}"
        />
        <span class="text"></span>
    </label>
</x-form-group>
