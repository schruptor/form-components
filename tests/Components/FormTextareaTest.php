<?php

use schruptor\FormComponents\Components\Forms\FormTextarea;

test('a form textarea can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormTextarea::class,
        componentParameters: [
            'id' => 'id',
            'rows' => 'rows',
            'name' => 'name',
            'text' => 'text'
        ],
    );
});
