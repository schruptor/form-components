<?php

namespace schruptor\FormComponents\Components\FormsGroup;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormLabel extends FormComponents
{
    public function __construct(
        public string $label,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.form-label');
    }
}
