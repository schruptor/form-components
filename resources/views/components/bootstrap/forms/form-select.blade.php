<div class="form-group">
    <select
        name="{{ $name }}"

        @if($multiple)
            multiple
        @endif

        @if($placeholder)
            placeholder="{{ $placeholder }}"
        @endif

        @if($label && !$attributes->get('id'))
            id="{{ $name }}"
        @endif

        {!! $attributes->merge(['class' => 'form-control ']) !!}>

        @if($placeholder)
            <option value="" disabled @if($nothingSelected()) selected="selected" @endif>
                {{ $placeholder }}
            </option>
        @endif

        @forelse($options as $key => $option)
            <option value="{{ $key }}" @if($isSelected($key)) selected="selected" @endif>
                {{ $option }}
            </option>
        @empty
            {!! $slot !!}
        @endforelse
    </select>
    {!! $help ?? null !!}
</div>
