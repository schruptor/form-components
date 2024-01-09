<div>
    <label class="inline-flex items-center">
        <input {!! $attributes->merge(['class' => 'form-radio']) !!}
               type="radio"
               name="{{ $name }}"
               value="{{ $value }}"

               @if($checked)
                   checked="checked"
            @endif
        />
        <span class="ml-2">{{ $label }}</span>
    </label>
</div>
