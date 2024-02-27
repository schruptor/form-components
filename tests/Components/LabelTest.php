<?php

use schruptor\FormComponents\Components\Labels\Label;

test('a label can be rendered', function () {
    $this->assertComponentSnapshot(
        class: Label::class,
        componentParameters: ['label' => 'form label'],
    );
});
