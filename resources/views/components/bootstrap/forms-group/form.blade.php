<form {{ $attributes }} >
    {{ csrf_field() }}
    {{ $slot }}
</form>
