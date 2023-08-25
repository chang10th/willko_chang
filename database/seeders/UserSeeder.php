<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'lastname' => 'Admin',
            'firstname' => 'Willko',
            'email' => 'adminwillko@example.com',
            'role_id' => 3,
        ]);

        User::factory()
            ->count(100)
            ->create();
    }
}
