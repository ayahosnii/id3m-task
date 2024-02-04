<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ChangeUserStatusTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testChangeUserStatusCommand()
    {
        // Run the command
        $this->artisan('user:change-status');

        $this->assertDatabaseHas('users', [
            'email' => 'test1@example.com',
            'status' => false,
        ]);

        $this->assertDatabaseHas('users', [
            'email' => 'test2@example.com',
            'status' => false,
        ]);

    }
}
