<?php

use schruptor\FormComponents\Components\Badges\Badge;

test('a badge can be rendered', function () {
    $this->assertComponentSnapshot(
        class: Badge::class,
        componentParameters: ['color' => 'danger', 'number' => '3', 'text' => 'badge text'],
    );
});
