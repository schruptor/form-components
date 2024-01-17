<div {{ $attributes->merge(['class' => 'form-group']) }} id="{{ $groupName }}">
    <x-form-label :label="{{ $label }}"></x-form-label>
    <x-form-input
        :name="{{ $name }}"
        :type="{{ $type }}"
        :value="{{ $value }}"
        :placeholder="{{ $placeholder }}"
    ></x-form-input>
</div>
