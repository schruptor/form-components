<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormCheckbox extends FormComponents
{
    public function __construct(
        public bool $value,
        public string $name,
        public string $label = ' '
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-checkbox');
    }
}
