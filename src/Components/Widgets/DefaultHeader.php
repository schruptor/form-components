<?php

namespace schruptor\FormComponents\Components\Widgets;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class DefaultHeader extends FormComponents
{
    public function __construct(
        public string $icon,
        public string $title,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.widgets.default-header');
    }
}
