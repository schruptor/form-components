<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormToggle extends FormComponents
{
    public function __construct(
        public string $id,
        public string $name,
        public string $defaultYes,
        public string $defaultNo,
        public bool $isActive,
        public ?string $framework = null,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-toggle');
    }
}
