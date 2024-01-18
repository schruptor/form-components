<?php

namespace schruptor\FormComponents\Components\Badges;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class Badge extends FormComponents
{
    public function __construct(
        public string $color,
        public string $number,
        public string $text,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.badges.badge');
    }
}
