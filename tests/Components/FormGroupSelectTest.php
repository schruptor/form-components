<?php

use schruptor\FormComponents\Components\FormsGroup\FormGroupSelect;

test('a form group select can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormGroupSelect::class,
        componentParameters: ['label' => 'label', 'name' => 'name'],
        slot: 'https://localhost'
    );
});
