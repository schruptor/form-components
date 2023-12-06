<?php

namespace schruptor\FormComponents\Components;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class Anchor extends FormComponents
{
    public function __construct(
        public string $link
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.anchor');
    }
}
