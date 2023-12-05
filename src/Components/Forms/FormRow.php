<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\View\Component;
use Illuminate\Contracts\View\View;
use function schruptor\FormComponents\Components\Forms\view;

class FormRow extends Component
{
    public function render(): View
    {
        return view('defaults::components.forms.form-row');
    }
}
