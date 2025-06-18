<?php

namespace JaksaVlahovic\MyPackage\Commands;

use Illuminate\Console\Command;

class MyPackageCommand extends Command
{
    public $signature = 'my-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
