<?php

namespace schruptor\FormComponents\Components\Tailwind\Forms;

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
        return view('form-components::components.'.$this->getFramework().'.forms.form-label');
    }
}
