<?php

use schruptor\FormComponents\Components\Bootstrap\Forms\FormGroup;

test('a form group can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormGroup::class,
        slot: 'https://localhost'
    );
});