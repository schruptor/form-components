<?php

namespace schruptor\FormComponents\Components\Forms;

use Illuminate\Contracts\View\View;
use Illuminate\Validation\Validator;
use schruptor\FormComponents\Exceptions\FrameworkNotAvailable;
use schruptor\FormComponents\FormComponents;

class FormInput extends FormComponents
{
    public function __construct(
        public string $type,
        public bool $required = false,
        public ?string $dataType = '',
        public ?string $placeholder = '',
        public ?string $name = '',
        public ?string $value = '',
        public ?string $id = null,
        public ?string $framework = null,
    ) {
        if ($this->id === null) {
            $this->id = $this->name;
        }
    }

    /**
     * @throws FrameworkNotAvailable
     */
    public function render(): View
    {
        return view('form-components::components.'.$this->getFramework().'.forms.form-input');
    }
}
