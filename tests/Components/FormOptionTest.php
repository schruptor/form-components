<?php

use schruptor\FormComponents\Components\Forms\FormOption;

test('a form option can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormOption::class,
        componentParameters: ['option' => [
            'key' => 'key',
            'value' => 'value',
            'selected' => 'selected',
            'description' => 'description',
        ],
        ],
    );
});
