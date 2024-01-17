<div class="mt-4">
    <label class="block">
        <input {!! $attributes->merge(['class' => 'block w-full']) !!}
               value="{{ $value }}"
               name="{{ $name }}"
               id="{{ $name }}"
               @if($required)
                   required
               @endif
               placeholder="{{ $placeholder }}"
        />
    </label>
</div>
