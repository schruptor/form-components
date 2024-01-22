<div {{ $attributes->merge(['class' => 'static']) }} id="{{ $groupName }}">
    <x-form-label
        class="absolute pl-3 pt-2 text-xs"
        label="{{ $label }}"
    />
    <x-form-input
        name="{{ $name }}"
        type="{{ $type }}"
        value="{{ $value }}"
        placeholder="{{ $placeholder }}"
    />
</div>
