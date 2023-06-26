<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)->sequence(
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Headman',
                'email' => 'headman@headman.com',
                'password' => bcrypt('1234'),
            ],
            [
                'name' => 'Officer',
                'email' => 'officer@officer.com',
                'password' => bcrypt('1234'),
            ],
        )->create();
    }
}