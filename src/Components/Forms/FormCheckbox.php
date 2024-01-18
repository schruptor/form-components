<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormCheckbox extends FormComponents
{
    public function __construct(
        public bool $value,
        public string $name,
        public bool $checked = false,
        public string $label = ' ',
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-checkbox');
    }
}
