<?php

use schruptor\FormComponents\Components\Tailwind\Forms\FormLabel;

test('a tailwind form label checkbox can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormLabel::class,
        componentParameters: ['label' => 'Form label test'],
    );
});
