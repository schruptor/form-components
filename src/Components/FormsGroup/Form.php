<?php

namespace schruptor\FormComponents\Components\FormsGroup;

use Illuminate\Contracts\View\View;
use schruptor\FormComponents\FormComponents;

class Form extends FormComponents
{
    public bool $isSpoofed = false;

    public string $realMethod = 'POST';

    public function __construct(
        public string $method = 'POST',
        public ?string $framework = null
    ) {
        $this->isSpoofed = in_array($this->method, ['PUT', 'PATCH', 'DELETE']);
        $this->realMethod = in_array($this->method, ['PUT', 'PATCH', 'DELETE', 'POST']) ? 'POST' : 'GET';
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms-group.form');
    }
}
