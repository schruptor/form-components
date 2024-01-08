<?php

use schruptor\FormComponents\Components\Forms\FormToggle;

test('a toggle can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormToggle::class,
        componentParameters: ['value' => 'Toggle test value'],
    );
});
