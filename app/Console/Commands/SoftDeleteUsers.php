<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class SoftDeleteUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:soft-delete';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Soft delete users with status "Not Active"';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Query to soft delete users with status 'Not Active'
        $deactiveUserCount = User::where('status', false)->delete();

        // Output the count and a message
        $this->info($deactiveUserCount . ' users soft deleted.');
    }
}
