<?php

use schruptor\FormComponents\Components\Tables\Partials\TdElement;

test('a td element can be rendered', function () {
    $this->assertComponentSnapshot(
        class: TdElement::class,
        slot: 'https://localhost'
    );
});
