<?php

namespace schruptor\FormComponents\Components\Tables\Partials;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class TableHeader extends FormComponents
{
    public function __construct(
        public string $id,
        public ?string $framework = null
    ) {
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.tables.partials.table-header');
    }
}
