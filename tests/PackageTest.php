<?php

use schruptor\FormComponents\Components\Bootstrap\Forms\FormGroup;
use schruptor\FormComponents\Exceptions\FrameworkNotAvailable;

test('when a wrong framework is given, an exception is thrown', function () {
    $this->assertComponentSnapshot(
        class: FormGroup::class,
        componentParameters: ['framework' => '42'],
        slot: 'https://localhost'
    );
})->throws(FrameworkNotAvailable::class);
