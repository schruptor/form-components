<?php

use schruptor\FormComponents\Components\FormsGroup\Pos\ScanBar;

test('a scan bar can be rendered', function () {
    $this->assertComponentSnapshot(
        class: ScanBar::class,
        componentParameters: [
            'icon' => 'icon',
            'type' => 'type',
            'id' => 'id',
            'idHidden' => 'idHidden',
        ],
    );
});
