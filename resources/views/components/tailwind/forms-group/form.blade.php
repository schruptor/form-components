<form {{ $attributes }} method="{{ $realMethod }}">
    @if($realMethod === 'POST')
        @csrf
    @endif
    @if($isSpoofed)
        @method($method)
    @endif

    {{ $slot }}
</form>
