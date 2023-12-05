<?php

namespace schruptor\FormComponents\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \schruptor\FormComponents\FormComponents
 */
class FormComponents extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \schruptor\FormComponents\FormComponents::class;
    }
}
