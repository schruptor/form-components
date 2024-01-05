<?php

use schruptor\FormComponents\Components\Tailwind\Forms\FormInput;

test('a tailwind input can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormInput::class,
        componentParameters: ['name' => 'Input test', 'value' => 'Input test value'],
    );
});
