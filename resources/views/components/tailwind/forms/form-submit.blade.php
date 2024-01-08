<div class="mt-6 flex items-center justify-between">
    <button {!! $attributes->merge([
        'class' => 'text-black py-2 px-4 rounded focus:outline-none focus:shadow-outline',
        'type' => 'submit'
    ]) !!}>
        {!! trim($slot) ?: __('Submit') !!}
    </button>
</div>
