<?php

namespace schruptor\FormComponents\Components\Buttons;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class RoundedBtn extends FormComponents
{
    public function __construct(
        public string $id,
        public string $icon,
        public string $text,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.buttons.rounded-btn');
    }
}
