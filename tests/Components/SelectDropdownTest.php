<?php

use schruptor\FormComponents\Components\FormsGroup\SelectDropdown;

test('a form select dropdown can be rendered', function () {
    $this->assertComponentSnapshot(
        class: SelectDropdown::class,
        componentParameters: ['label' => 'label', 'icon' => 'icon'],
        slot: 'https://localhost'
    );
});
