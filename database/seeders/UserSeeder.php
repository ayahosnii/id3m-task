<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Test User 1',
            'email' => 'test1@example.com',
            'password' => Hash::make('password'),
            'status' => true,
        ]);

        User::create([
            'name' => 'Test User 2',
            'email' => 'test2@example.com',
            'password' => Hash::make('password'),
            'status' => true,
        ]);

        User::create([
            'name' => 'User 3',
            'email' => 'user3@example.com',
            'password' => Hash::make('password'),
            'status' => true,
        ]);

        User::create([
            'name' => 'User 4',
            'email' => 'user4@example.com',
            'password' => Hash::make('password'),
            'status' => true,
        ]);
    }
}
