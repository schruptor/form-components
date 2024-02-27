<?php

use schruptor\FormComponents\Components\Buttons\DefaultBtn;

test('a default button can be rendered', function () {
    $this->assertComponentSnapshot(
        class: DefaultBtn::class,
        componentParameters: ['id' => 'id'],
    );
});
