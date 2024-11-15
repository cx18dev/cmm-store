<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // You can add more users if needed
        User::create([
            'name' => 'CMM Admin',
            'email' => 'admin@cmmstore.com',
            'password' => Hash::make('admin@123'),
        ]);
    }
}
