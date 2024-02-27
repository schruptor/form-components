<?php

use schruptor\FormComponents\Components\Buttons\RoundedBtn;

test('a rounded button can be rendered', function () {
    $this->assertComponentSnapshot(
        class: RoundedBtn::class,
        componentParameters: ['id' => 'roundedBtn', 'icon' => 'fa fa btn', 'text' => 'rounded button text'],
    );
});
