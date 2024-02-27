<input
    {{ $attributes->merge(['class' => 'checkbox-slider slider-icon yesno colored-success']) }}
    type="checkbox"
    id="{{ $id }}"
    name="{{ $name }}"
    data-on="{{ $defaultYes }}" {{ $isActive ? 'checked' : '' }}
    data-off="{{ $defaultNo }}">
