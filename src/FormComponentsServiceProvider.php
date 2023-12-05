<?php

namespace schruptor\FormComponents;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use schruptor\FormComponents\Commands\FormComponentsCommand;

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
}
