<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormInput extends FormComponents
{
    public function __construct(
        public string $name,
        public string $value,
        public string $type,
        public string $placeholder,
        public bool $required = false,
        public ?string $framework = null,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-input');
    }
}
