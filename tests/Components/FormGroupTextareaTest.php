<?php

use schruptor\FormComponents\Components\FormsGroup\FormGroupTextare;

test('a form group textarea can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormGroupTextare::class,
        componentParameters: [
            'label' => 'label',
            'id' => 'id',
            'name' => 'name',
            'rows' => 'rows',
            'required' => true,
            'text' => 'text'
        ],
    );
});
