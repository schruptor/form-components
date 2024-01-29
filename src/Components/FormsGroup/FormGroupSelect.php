<?php

namespace schruptor\FormComponents\Components\FormsGroup;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormGroupSelect extends FormComponents
{
    public function __construct(
        public string $label,
        public string $name,
        public ?string $icon = '',
        public ?string $color = '',
        public ?bool $multiple = false,
        public ?bool $required = false,
        public ?string $framework = null,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.form-group-select');
    }
}
