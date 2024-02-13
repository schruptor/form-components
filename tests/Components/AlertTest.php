<?php

use schruptor\FormComponents\Components\Alerts\Alert;

test('an alert can be rendered', function () {
    $this->assertComponentSnapshot(
        class: Alert::class,
        componentParameters: ['color' => 'danger', 'number' => '3', 'text' => 'badge text'],
    );
});
