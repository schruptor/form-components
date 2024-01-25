<?php

namespace schruptor\FormComponents\Components\FormsGroup\Pos;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class ScanBar extends FormComponents
{
    public function __construct(
        public string $id,
        public string $type,
        public string $idHidden,
        public string $icon,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.pos.scan-bar');
    }
}
