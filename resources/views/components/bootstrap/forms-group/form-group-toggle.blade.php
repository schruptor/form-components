<div {{ $attributes->merge(['class' => 'form-group']) }}>
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
</div>
