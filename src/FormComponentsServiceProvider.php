<?php

namespace schruptor\FormComponents;

use schruptor\FormComponents\Commands\FormComponentsCommand;
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
}
