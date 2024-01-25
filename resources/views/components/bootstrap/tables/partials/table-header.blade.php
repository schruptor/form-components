<table id="{{ $id }}" {{ $attributes->merge(['class' => 'cart table table-bordered table-hover']) }}>
    <thead>
        <tr>
            {{ $slot }}
        </tr>
    </thead>
</table>
