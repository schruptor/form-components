<?php

namespace schruptor\FormComponents\Components\Alerts;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class TableAlert extends FormComponents
{
    public function __construct(
        public bool $canScan,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.alerts.table-alert');
    }
}
