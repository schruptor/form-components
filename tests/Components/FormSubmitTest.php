<?php

use schruptor\FormComponents\Components\Forms\FormSubmit;

test('a submit button can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormSubmit::class,
        slot: 'https://localhost'
    );
});
