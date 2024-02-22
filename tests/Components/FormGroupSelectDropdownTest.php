<?php

use schruptor\FormComponents\Components\FormsGroup\FormGroupSelectDropdown;

test('a form select dropdown can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormGroupSelectDropdown::class,
        componentParameters: ['label' => 'label', 'icon' => 'icon'],
        slot: 'https://localhost'
    );
});
