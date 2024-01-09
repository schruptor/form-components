<textarea id="{{ $name }}"
          required=""
          {{ $attributes->merge(['class' => 'form-control']) }}
          name="{{ $name }}"
          rows="6"
          style="resize: none;">
    {{ $value }}
</textarea>
