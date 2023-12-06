<?php

namespace schruptor\FormComponents;

use Illuminate\Support\Facades\Blade;
use schruptor\FormComponents\Components\Bootstrap\Forms\FormGroup;
use schruptor\FormComponents\Components\Bootstrap\Forms\FormInput;
use schruptor\FormComponents\Components\Bootstrap\Forms\FormRow;
use schruptor\FormComponents\Components\Bootstrap\Forms\FormTextarea;
use schruptor\FormComponents\Components\Bootstrap\Forms\FormToggle;
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
        Blade::component('form-group', FormGroup::class);

        Blade::component('form-row', FormRow::class);
        Blade::component('form-input', FormInput::class);
        Blade::component('form-textarea', FormTextarea::class);
        Blade::component('form-toggle', FormToggle::class);
    }
}
