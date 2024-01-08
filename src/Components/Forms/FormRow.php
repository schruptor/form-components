<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormRow extends FormComponents
{
    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-row');
    }
}