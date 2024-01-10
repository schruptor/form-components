<?php

namespace schruptor\FormComponents;

use Illuminate\Support\Facades\Blade;
use schruptor\FormComponents\Components\Forms\FormCheckbox;
use schruptor\FormComponents\Components\Forms\FormGroup;
use schruptor\FormComponents\Components\Forms\FormInput;
use schruptor\FormComponents\Components\Forms\FormLabel;
use schruptor\FormComponents\Components\Forms\FormRadio;
use schruptor\FormComponents\Components\Forms\FormRow;
use schruptor\FormComponents\Components\Forms\FormSelect;
use schruptor\FormComponents\Components\Forms\FormSubmit;
use schruptor\FormComponents\Components\Forms\FormTextarea;
use schruptor\FormComponents\Components\Forms\FormToggle;
use schruptor\FormComponents\Components\FormsGroup\Form;
use schruptor\FormComponents\Components\FormsGroup\FormCheckbox as FormsGroupCheckbox;
use schruptor\FormComponents\Components\FormsGroup\FormGroup as FormsGroup;
use schruptor\FormComponents\Components\FormsGroup\FormInput as FormsGroupInput;
use schruptor\FormComponents\Components\FormsGroup\FormLabel as FormsGroupLabel;
use schruptor\FormComponents\Components\FormsGroup\FormRadio as FormsGroupRadio;
use schruptor\FormComponents\Components\FormsGroup\FormRow as FormsGroupRow;
use schruptor\FormComponents\Components\FormsGroup\FormSelect as FormsGroupSelect;
use schruptor\FormComponents\Components\FormsGroup\FormSubmit as FormsGroupSubmit;
use schruptor\FormComponents\Components\FormsGroup\FormTextarea as FormsGroupTextarea;
use schruptor\FormComponents\Components\FormsGroup\FormToggle as FormsGroupToggle;
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

    public function packageBooted()
    {
        $this->registerComponents();
    }

    private function registerComponents()
    {
        Blade::component('form-checkbox', FormCheckbox::class);
        Blade::component('form-group', FormGroup::class);
        Blade::component('form-input', FormInput::class);
        Blade::component('form-label', FormLabel::class);
        Blade::component('form-radio', FormRadio::class);
        Blade::component('form-row', FormRow::class);
        Blade::component('form-select', FormSelect::class);
        Blade::component('form-submit', FormSubmit::class);
        Blade::component('form-textarea', FormTextarea::class);
        Blade::component('form-toggle', FormToggle::class);

        Blade::component('forms-group-form', Form::class);
        Blade::component('forms-group-checkbox', FormsGroupCheckbox::class);
        Blade::component('forms-group-group', FormsGroup::class);
        Blade::component('forms-group-input', FormsGroupInput::class);
        Blade::component('forms-group-label', FormsGroupLabel::class);
        Blade::component('forms-group-radio', FormsGroupRadio::class);
        Blade::component('forms-group-row', FormsGroupRow::class);
        Blade::component('forms-group-select', FormsGroupSelect::class);
        Blade::component('forms-group-submit', FormsGroupSubmit::class);
        Blade::component('forms-group-textarea', FormsGroupTextarea::class);
        Blade::component('forms-group-toggle', FormsGroupToggle::class);

    }
}
