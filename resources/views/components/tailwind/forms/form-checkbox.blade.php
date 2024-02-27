<label>
    <input {{ $attributes->merge(['class' => '']) }}
           type="checkbox"
           value="{{ $value }}"
           name="{{ $name }}"
           id="{{ $id }}"/>
    <span class="text"></span>
</label>
