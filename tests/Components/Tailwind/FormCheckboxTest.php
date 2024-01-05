<?php

use schruptor\FormComponents\Components\Tailwind\Forms\FormCheckbox;

test('a tailwind checkbox can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormCheckbox::class,
        componentParameters: ['name' => 'Checkbox test', 'value' => 'Checkbox test'],
    );
});
