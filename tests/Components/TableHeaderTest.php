<?php

use schruptor\FormComponents\Components\Tables\Partials\TableHeader;

test('a table header can be rendered', function () {
    $this->assertComponentSnapshot(
        class: TableHeader::class,
        componentParameters: ['id' => 'table header id'],
        slot: 'https://localhost'
    );
});
