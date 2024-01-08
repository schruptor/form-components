<label {{ $attributes->merge(['class' => 'position-relative checkbox-label']) }} style="line-height:15px;">
    <input type="checkbox" id="active" name="active" class="checkbox-slider slider-icon yesno colored-success" data-on="{{ __('defaults.yes') }}" {{ $value ? 'checked' : '' }} data-off="{{ __('defaults.no') }}">
    <span class="text"></span>
</label>
