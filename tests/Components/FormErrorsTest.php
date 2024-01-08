<?php

use schruptor\FormComponents\Components\Forms\FormErrors;

test('a form error checkbox can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormErrors::class,
        componentParameters: ['name' => 'Error bag test', 'bag' => 'default', 'message' => 'This is an error bag'],
    );
});
