<?php

use schruptor\FormComponents\Components\FormsGroup\FormGroupToggle;

test('a form group toggle can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormGroupToggle::class,
        componentParameters: [
            'label' => 'label',
            'id' => 'id',
            'name' => 'name',
            'isActive' => true,
            'defaultYes' => 'yes',
            'defaultNo' => 'no',
        ],
    );
});
