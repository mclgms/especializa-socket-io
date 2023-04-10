<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NotificarNovoPostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'notify';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->notify("teste",'tese');
    }
}
