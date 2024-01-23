<?php

namespace schruptor\FormComponents\Components\Tables\Partials;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class TdElement extends FormComponents
{
    public function __construct(
        public string $text,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.tables.partials.td-element');
    }
}
