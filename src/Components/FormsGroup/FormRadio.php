<?php

namespace schruptor\FormComponents\Components\FormsGroup;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormRadio extends FormComponents
{
    public function __construct(
        public string $name,
        public string $label,
        public $value,
        public bool $checked = false
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.form-radio');
    }
}
