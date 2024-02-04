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
        $deactiveUser = User::where('status', false)->delete();

        $this->info($deactiveUser . ' users soft deleted.');
    }
}
