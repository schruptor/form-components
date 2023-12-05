<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormToggle extends Component
{
    public function __construct(
        public bool $value,
    ) {
    }

    public function render(): View
    {
        return view('defaults::components.forms.form-toggle');
    }
}
