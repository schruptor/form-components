<?php

use schruptor\FormComponents\Components\Tailwind\Forms\FormGroup;

test('a tailwind form group can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormGroup::class,
        slot: 'https://localhost'
    );
});
