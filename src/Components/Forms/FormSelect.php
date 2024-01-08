<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use schruptor\FormComponents\FormComponents;

class FormSelect extends FormComponents
{
    public function __construct(
        public string $name,
        public string $label,
        public $options,
        public $selectedKey,
        public bool $multiple,
        public bool $floating,
        public string $placeholder,
    ) {
    }

    public function isSelected($key): bool
    {
        return in_array($key, Arr::wrap($this->selectedKey));
    }

    public function nothingSelected(): bool
    {
        return is_array($this->selectedKey) ? empty($this->selectedKey) : is_null($this->selectedKey);
    }

    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-select');
    }
}
