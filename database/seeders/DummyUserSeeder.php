<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'hadi',
                'email' => 'hadi@gmail.com',
                'role' => 'operator',
                'password' => bcrypt('123')

            ],
            [
                'name' => 'eko',
                'email' => 'eko@gmail.com',
                'role' => 'keuangan',
                'password' => bcrypt('123')

            ],
            [
                'name' => 'sasa',
                'email' => 'sasa@gmail.com',
                'role' => 'marketing',
                'password' => bcrypt('123')

            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }
    }
}
