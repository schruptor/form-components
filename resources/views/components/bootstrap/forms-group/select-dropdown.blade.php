<div {{ $attributes->merge(['class' => 'form-group']) }}>
    <x-form-label label="{{ $label }}"></x-form-label>

    <div class="controls">
        <div class="input-group">
            <span class="input-group-addon">
                <i class="{{ $icon }}"></i>
            </span>
            {{ $slot }}
        </div>
    </div>
</div>
