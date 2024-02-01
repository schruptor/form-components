<?php

use schruptor\FormComponents\Components\FormsGroup\Form;

test('a form can be rendered', function () {
    $this->assertComponentSnapshot(
        class: Form::class,
        slot: 'https://localhost'
    );
});
