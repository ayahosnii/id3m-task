<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class ChangeUserStatus extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:change-status';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Change status to Not Active for users with email containing "test"';

    /**
     * Execute the console command.
     */

    public function handle()
    {
        $count = User::where('email', 'like', '%test%')->update(['status' => false]);

        $this->info($count . ' users\' status changed to Not Active.');
    }
}
