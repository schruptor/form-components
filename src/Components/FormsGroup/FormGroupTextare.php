<?php

namespace schruptor\FormComponents\Components\FormsGroup;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormGroupTextare extends FormComponents
{
    public function __construct(
        public string $label,
        public string $id,
        public string $name,
        public string $rows,
        public string $text,
        public ?string $groupName = '',
        public ?bool $required = false,
        public ?string $framework = null,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.form-group-textarea');
    }
}
