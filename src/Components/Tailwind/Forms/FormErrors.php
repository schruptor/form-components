<?php

namespace schruptor\FormComponents\Components\Tailwind\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormErrors extends FormComponents
{
    public function __construct(
        public string $name,
        public string $bag = 'default'
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-errors');
    }
}
