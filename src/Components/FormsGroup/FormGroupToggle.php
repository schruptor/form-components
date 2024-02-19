<?php

namespace schruptor\FormComponents\Components\FormsGroup;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormGroupToggle extends FormComponents
{
    public function __construct(
        public string $label,
        public string $id,
        public string $name,
        public string $defaultYes,
        public string $defaultNo,
        public bool $isActive,
        public ?string $groupName = '',
        public ?string $framework = null,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.form-group-toggle');
    }
}
