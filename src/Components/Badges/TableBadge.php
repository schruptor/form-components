<?php

namespace schruptor\FormComponents\Components\Badges;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class TableBadge extends FormComponents
{
    public function __construct(
        public bool $canScan,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.badges.table-badge');
    }
}
