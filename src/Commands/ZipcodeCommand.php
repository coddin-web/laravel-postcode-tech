<?php

namespace Coddin\Zipcode\Commands;

use Illuminate\Console\Command;

class ZipcodeCommand extends Command
{
    public $signature = 'zipcode';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
