<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class FormSelect extends FormComponents
{
    public function __construct(
        public string $name,
        public bool $multiple,
        public bool $required,
        public ?array $options = [],
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-select');
    }
}
