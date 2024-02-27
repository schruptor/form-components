<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormTextarea extends FormComponents
{
    public function __construct(
        public string $id,
        public string $rows,
        public string $name,
        public string $text,
        public ?bool $required = false,
        public ?string $framework = null,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-textarea');
    }
}
