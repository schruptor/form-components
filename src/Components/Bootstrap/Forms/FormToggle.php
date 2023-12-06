<?php

namespace schruptor\FormComponents\Components\Bootstrap\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormToggle extends FormComponents
{
    public function __construct(
        public bool $value,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.' . $this->getFramework() . '.forms.form-toggle');
    }
}
