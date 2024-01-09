<div class="form-check">
    <input {!! $attributes->merge(['class' => 'form-check-input']) !!}
           type="radio"
           name="{{ $name }}"
           value="{{ $value }}"
           id="{{ $name }}"

           @if($checked)
               checked="checked"
           @endif
    />
</div>
