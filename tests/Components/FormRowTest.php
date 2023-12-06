<?php

use schruptor\FormComponents\Components\Bootstrap\Forms\FormRow;

test('a row group can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormRow::class,
        slot: 'https://localhost',
    );
});
