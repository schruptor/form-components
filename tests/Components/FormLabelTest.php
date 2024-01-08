<?php

use schruptor\FormComponents\Components\Forms\FormLabel;

test('a form label checkbox can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormLabel::class,
        componentParameters: ['label' => 'Form label test'],
    );
});
