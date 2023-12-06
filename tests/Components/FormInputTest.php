<?php

use schruptor\FormComponents\Components\Bootstrap\Forms\FormInput;

test('an input can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormInput::class,
        componentParameters: ['name' => 'Input test', 'value' => 'Input test value'],
    );
});
