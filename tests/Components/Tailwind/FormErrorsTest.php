<?php

use schruptor\FormComponents\Components\Tailwind\Forms\FormErrors;

test('a tailwind form error checkbox can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormErrors::class,
        componentParameters: ['name' => 'Error bag test'],
    );
});
