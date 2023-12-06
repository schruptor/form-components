<?php

namespace schruptor\FormComponents;

use Illuminate\View\Component;
use schruptor\FormComponents\Exceptions\FrameworkNotAvailable;

abstract class FormComponents extends  Component
{
    const DEFAULT_FRAMEWORK = 'bootstrap';

    const AVAILABLE_FRAMEWORKS = [
        'tailwind',
        'bootstrap'
    ];

    public ?string $framework = null;

    /**
     * @throws FrameworkNotAvailable
     */
    protected function getFramework(): string
    {
        $framework = $this->framework ?: config('form-components.framework') ?: self::DEFAULT_FRAMEWORK;

        if (in_array($framework, self::AVAILABLE_FRAMEWORKS)) {
            return $framework;
        }

        throw new FrameworkNotAvailable();
    }
}
