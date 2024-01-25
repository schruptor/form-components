<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormInput extends FormComponents
{
    public function __construct(
        public string $type,
        public bool $required = false,
        public ?string $placeholder = '',
        public ?string $name = '',
        public ?string $value = '',
        public ?string $framework = null,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-input');
    }
}
