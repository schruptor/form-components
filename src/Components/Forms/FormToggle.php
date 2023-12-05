<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use function schruptor\FormComponents\Components\Forms\view;

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
