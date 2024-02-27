<?php

namespace schruptor\FormComponents\Exceptions;

use Exception;

class FrameworkNotAvailable extends Exception
{
    protected $message = 'Framework not Tailwind or Bootstrap';
}
