<div class="mt-4">
    <label class="block">
        <input {!! $attributes->merge(['class' => 'block w-full']) !!}
               value="{{ $value }}"
               name="{{ $name }}"
               required="{{ $required }}"
               id="{{ $name }}"
        />
    </label>
</div>
