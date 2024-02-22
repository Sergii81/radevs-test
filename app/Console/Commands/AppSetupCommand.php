<?php

namespace App\Console\Commands;

use App\Services\PermissionsSetup;
use Illuminate\Console\Command;

class AppSetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Setup command';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting...');

        $this->setupPermissions();

        if ($this->setupPermissions()) {
            $this->newLine();
            $this->info('OK. Setup finished successfully!');
        }

        return self::SUCCESS;
    }

    /**
     * @return bool
     */
    private function setupPermissions(): bool
    {
        $this->newLine();
        $this->line('Roles & Permissions setup...');

        PermissionsSetup::permissionsSetup();

        $this->info('OK. Roles & Permissions setup successful.');

        return true;
    }
}
