<?php

use schruptor\FormComponents\Components\Alerts\TableAlert;

test('a table alert can be rendered', function () {
    $this->assertComponentSnapshot(
        class: TableAlert::class,
        componentParameters: ['canScan' => 'true'],
    );
});
