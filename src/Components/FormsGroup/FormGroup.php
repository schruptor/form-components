<?php

namespace schruptor\FormComponents\Components\FormsGroup;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormGroup extends FormComponents
{
    public function __construct(
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.form-group');
    }
}
