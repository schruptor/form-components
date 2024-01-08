<?php

use schruptor\FormComponents\Components\Anchor;

test('an anchor can be rendered', function () {
    $this->assertComponentSnapshot(
        class: Anchor::class,
        componentParameters: ['link' => 'https://localhost'],
        slot: 'https://localhost'
    );
});
