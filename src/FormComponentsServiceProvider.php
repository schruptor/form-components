<?php

namespace schruptor\FormComponents;

use Illuminate\Support\Facades\Blade;
use schruptor\FormComponents\Components\Alerts\Alert;
use schruptor\FormComponents\Components\Alerts\TableAlert;
use schruptor\FormComponents\Components\Buttons\ALinkBtn;
use schruptor\FormComponents\Components\Buttons\RoundedBtn;
use schruptor\FormComponents\Components\Forms\FormCheckbox;
use schruptor\FormComponents\Components\Forms\FormGroup;
use schruptor\FormComponents\Components\Forms\FormInput;
use schruptor\FormComponents\Components\Forms\FormLabel;
use schruptor\FormComponents\Components\Forms\FormOption;
use schruptor\FormComponents\Components\Forms\FormSelect;
use schruptor\FormComponents\Components\Forms\FormSubmit;
use schruptor\FormComponents\Components\Forms\FormTextarea;
use schruptor\FormComponents\Components\Forms\FormToggle;
use schruptor\FormComponents\Components\FormsGroup\Form;
use schruptor\FormComponents\Components\FormsGroup\FormGroupInput;
use schruptor\FormComponents\Components\FormsGroup\FormGroupSelect;
use schruptor\FormComponents\Components\FormsGroup\FormGroupTextare;
use schruptor\FormComponents\Components\FormsGroup\FormGroupToggle;
use schruptor\FormComponents\Components\FormsGroup\Pos\ScanBar;
use schruptor\FormComponents\Components\FormsGroup\SelectDropdown;
use schruptor\FormComponents\Components\Labels\Label;
use schruptor\FormComponents\Components\Tables\Partials\TableHeader;
use schruptor\FormComponents\Components\Tables\Partials\TdElement;
use schruptor\FormComponents\Components\Widgets\Card;
use schruptor\FormComponents\Components\Widgets\DefaultHeader;
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
        Blade::component('form-submit', FormSubmit::class);
        Blade::component('form-select', FormSelect::class);
        Blade::component('form-textarea', FormTextarea::class);
        Blade::component('form-toggle', FormToggle::class);
        Blade::component('form-option', FormOption::class);

        Blade::component('group-form', Form::class);
        Blade::component('forms-group-input', FormGroupInput::class);
        Blade::component('form-select-dropdown', SelectDropdown::class);
        Blade::component('form-scan-bar', ScanBar::class);
        Blade::component('form-group-select', FormGroupSelect::class);
        Blade::component('form-group-textarea', FormGroupTextare::class);
        Blade::component('form-group-toggle', FormGroupToggle::class);

        Blade::component('btn-a-link', ALinkBtn::class);
        Blade::component('rounded-btn', RoundedBtn::class);

        Blade::component('labels-simple-label', Label::class);

        Blade::component('widget-default-header', DefaultHeader::class);
        Blade::component('widget-card', Card::class);

        Blade::component('default-badge', Alert::class);
        Blade::component('table-badge', TableAlert::class);

        Blade::component('partials-table-header', TableHeader::class);
        Blade::component('partials-td-element', TdElement::class);

    }
}
