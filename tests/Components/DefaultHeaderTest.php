<?php

use schruptor\FormComponents\Components\Widgets\DefaultHeader;

test('a default header can be rendered', function () {
    $this->assertComponentSnapshot(
        class: DefaultHeader::class,
        componentParameters: ['icon' => 'card icon', 'title' => 'test title'],
        slot: 'https://localhost'
    );
});
