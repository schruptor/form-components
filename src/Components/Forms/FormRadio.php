<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormRadio extends FormComponents
{
    public function __construct(
        public string $name,
        public string $label,
        public $value,
        public bool $checked = false,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-radio');
    }
}
