<?php

namespace schruptor\FormComponents\Components\FormsGroup;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class SelectDropdown extends FormComponents
{
    public function __construct(
        public string $label,
        public ?string $groupName = '',
        public ?array $options = [],
        public ?string $icon = '',
        public ?string $framework = null,
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.select-dropdown');
    }
}
