<?php

use schruptor\FormComponents\Components\Badges\TableBadge;

test('a table badge can be rendered', function () {
    $this->assertComponentSnapshot(
        class: TableBadge::class,
        componentParameters: ['canScan' => 'true'],
    );
});
