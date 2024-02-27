<?php

use schruptor\FormComponents\Components\Forms\FormSelect;

test('a form select can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormSelect::class,
        componentParameters: ['name' => 'name', 'multiple' => true, 'required' => true],
        slot: 'https://localhost'
    );
});
