<?php

use schruptor\FormComponents\Components\Bootstrap\Forms\FormTextarea;

test('a text area can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormTextarea::class,
        componentParameters: ['name' => 'Text area test', 'value' => 'Text area test'],
    );
});
