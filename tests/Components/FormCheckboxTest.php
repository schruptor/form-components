<?php

use schruptor\FormComponents\Components\Forms\FormCheckbox;

test('a checkbox can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormCheckbox::class,
        componentParameters: ['name' => 'Checkbox test', 'value' => 'Checkbox test'],
    );
});
