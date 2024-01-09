<div class="form-check">
    <input {!! $attributes->merge(['class' => 'form-check-input']) !!}
           type="checkbox"
           value="{{ $value }}"
           name="{{ $name }}"
           id="{{ $name }}"

           @if($checked)
               checked="checked"
           @endif
    />
</div>
