<?php

use schruptor\FormComponents\Components\Widgets\Card;

test('a card can be rendered', function () {
    $this->assertComponentSnapshot(
        class: Card::class,
        componentParameters: [
            'icon' => 'card icon',
            'color' => 'red',
            'content' => 'test content',
            'title' => 'test title'
        ],
    );
});
