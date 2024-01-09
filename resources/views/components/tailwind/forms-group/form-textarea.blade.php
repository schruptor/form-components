<div class="mt-4">
    <label class="block">
        <x-form-label :label="$label" />

        <textarea name="{{ $name }}"
            {!! $attributes->merge(['class' => 'form-textarea block w-full ' . ($label ? 'mt-1' : '')]) !!}
        ></textarea>
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
