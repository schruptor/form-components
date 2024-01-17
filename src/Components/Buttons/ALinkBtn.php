<?php

namespace schruptor\FormComponents\Components\Buttons;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class ALinkBtn extends FormComponents
{
    public function __construct(
        public string $url,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.buttons.a-link-btn');
    }
}
