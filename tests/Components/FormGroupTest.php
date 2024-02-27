<?php

use schruptor\FormComponents\Components\Forms\FormGroup;

test('a form group can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormGroup::class,
        componentParameters: ['groupName' => 'groupName'],
        slot: 'https://localhost'
    );
});
