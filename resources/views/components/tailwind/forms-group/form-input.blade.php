<div class="mt-4">
    <label class="block">
        <input {!! $attributes->merge([
            'class' => 'block w-full ' . ($label ? 'mt-1' : '')
        ]) !!}
               value="{{ $value }}"
               name="{{ $name }}"
               required="{{ $required }}"
               id="{{ $name }}"
        />

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
