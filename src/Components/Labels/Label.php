<?php

namespace schruptor\FormComponents\Components\Labels;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class Label extends FormComponents
{
    public function __construct(
        public string $label,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.labels.label');
    }
}
