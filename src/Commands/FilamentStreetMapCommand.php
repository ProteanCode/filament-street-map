<?php

namespace Proteancode\FilamentStreetMap\Commands;

use Illuminate\Console\Command;

class FilamentStreetMapCommand extends Command
{
    public $signature = 'filament-street-map';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
