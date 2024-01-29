<?php

namespace schruptor\FormComponents\Components\FormsGroup;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormGroupInput extends FormComponents
{
    public function __construct(
        public string $label,
        public string $name,
        public string $type,
        public ?string $placeholder = '',
        public ?string $groupName = '',
        public ?string $value = '',
        public ?string $icon = '',
        public ?string $color = '',
        public ?string $dataType = '',
        public ?string $framework = null,
        public ?bool $required = false,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.form-group-input');
    }
}
