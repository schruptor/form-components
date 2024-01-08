<?php

namespace schruptor\FormComponents;

use Illuminate\Support\Facades\Blade;
use schruptor\FormComponents\Components\Forms\FormCheckbox;
use schruptor\FormComponents\Components\Forms\FormErrors;
use schruptor\FormComponents\Components\Forms\FormGroup;
use schruptor\FormComponents\Components\Forms\FormInput;
use schruptor\FormComponents\Components\Forms\FormLabel;
use schruptor\FormComponents\Components\Forms\FormRadio;
use schruptor\FormComponents\Components\Forms\FormRow;
use schruptor\FormComponents\Components\Forms\FormSelect;
use schruptor\FormComponents\Components\Forms\FormSubmit;
use schruptor\FormComponents\Components\Forms\FormTextarea;
use schruptor\FormComponents\Components\Forms\FormToggle;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FormComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('form-components')
            ->hasConfigFile(['form-components'])
            ->hasViews();
    }

    private function registerComponents()
    {
        Blade::component('form-checkbox', FormCheckbox::class);
        Blade::component('form-errors', FormErrors::class);
        Blade::component('form-group', FormGroup::class);
        Blade::component('form-input', FormInput::class);
        Blade::component('form-label', FormLabel::class);
        Blade::component('form-radio', FormRadio::class);
        Blade::component('form-row', FormRow::class);
        Blade::component('form-select', FormSelect::class);
        Blade::component('form-submit', FormSubmit::class);
        Blade::component('form-textarea', FormTextarea::class);
        Blade::component('form-toggle', FormToggle::class);

    }
}
