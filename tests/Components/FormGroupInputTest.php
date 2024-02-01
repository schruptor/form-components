<?php

use schruptor\FormComponents\Components\FormsGroup\FormGroupInput;

test('a form group input can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormGroupInput::class,
        componentParameters: [
            'label' => 'label',
            'name' => 'name',
            'type' => 'type',
        ],
    );
});
