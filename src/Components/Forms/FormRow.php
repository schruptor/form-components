<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FormRow extends Component
{
    public function render(): View
    {
        return view('defaults::components.forms.form-row');
    }
}
