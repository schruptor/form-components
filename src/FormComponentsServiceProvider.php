<?php

namespace schruptor\FormComponents;

use Illuminate\Support\Facades\Blade;
use schruptor\FormComponents\Commands\FormComponentsCommand;
use schruptor\FormComponents\Components\Forms\FormGroup;
use schruptor\FormComponents\Components\Forms\FormInput;
use schruptor\FormComponents\Components\Forms\FormRow;
use schruptor\FormComponents\Components\Forms\FormTextarea;
use schruptor\FormComponents\Components\Forms\FormToggle;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FormComponentsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('form-components')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_form-components_table')
            ->hasCommand(FormComponentsCommand::class);
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
