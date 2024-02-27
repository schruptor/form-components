<?php

namespace schruptor\FormComponents\Components\Widgets;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class Card extends FormComponents
{
    public function __construct(
        public string $icon,
        public string $color,
        public string $content,
        public string $title,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.widgets.card');
    }
}
