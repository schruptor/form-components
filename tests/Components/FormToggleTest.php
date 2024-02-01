<?php

use schruptor\FormComponents\Components\Forms\FormToggle;

test('a form toggle can be rendered', function () {
    $this->assertComponentSnapshot(
        class: FormToggle::class,
        componentParameters: [
            'id' => 'id',
            'name' => 'name',
            'isActive' => true,
            'defaultYes' => 'yes',
            'defaultNo' => 'no',
        ],
    );
});
