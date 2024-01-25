<?php

use schruptor\FormComponents\Components\Buttons\ALinkBtn;

test('a link button can be rendered', function () {
    $this->assertComponentSnapshot(
        class: ALinkBtn::class,
        componentParameters: ['url' => 'https://localhost'],
        slot: 'https://localhost'
    );
});
