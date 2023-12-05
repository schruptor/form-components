<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormInput extends Component
{
    public function __construct(
        public string $name,
        public string $value,
        public bool $required = false,
    ) {
    }

    public function render(): View
    {
        return view('defaults::components.forms.form-input');
    }
}
