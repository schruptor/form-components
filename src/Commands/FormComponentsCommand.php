<?php

namespace schruptor\FormComponents\Commands;

use Illuminate\Console\Command;

class FormComponentsCommand extends Command
{
    public $signature = 'form-components';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
