<?php

namespace schruptor\FormComponents;

use Illuminate\Support\Facades\Blade;
use schruptor\FormComponents\Components\Badges\Badge;
use schruptor\FormComponents\Components\Badges\TableBadge;
use schruptor\FormComponents\Components\Buttons\ALinkBtn;
use schruptor\FormComponents\Components\Buttons\RoundedBtn;
use schruptor\FormComponents\Components\Forms\FormCheckbox;
use schruptor\FormComponents\Components\Forms\FormGroup;
use schruptor\FormComponents\Components\Forms\FormInput;
use schruptor\FormComponents\Components\Forms\FormLabel;
use schruptor\FormComponents\Components\Forms\FormRow;
use schruptor\FormComponents\Components\Forms\FormSubmit;
use schruptor\FormComponents\Components\FormsGroup\Form;
use schruptor\FormComponents\Components\FormsGroup\FormGroupInput;
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
        Blade::component('form-row', FormRow::class);
        Blade::component('form-submit', FormSubmit::class);

        Blade::component('group-form', Form::class);
        Blade::component('forms-group-input', FormGroupInput::class);
        Blade::component('form-select-dropdown', SelectDropdown::class);
        Blade::component('form-scan-bar', ScanBar::class);

        Blade::component('btn-a-link', ALinkBtn::class);
        Blade::component('rounded-btn', RoundedBtn::class);

        Blade::component('labels-simple-label', Label::class);

        Blade::component('widget-default-header', DefaultHeader::class);
        Blade::component('widget-card', Card::class);

        Blade::component('default-badge', Badge::class);
        Blade::component('table-badge', TableBadge::class);

        Blade::component('partials-table-header', TableHeader::class);
        Blade::component('partials-td-element', TdElement::class);

    }
}
