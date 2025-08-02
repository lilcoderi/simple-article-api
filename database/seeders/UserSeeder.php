<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Riana',
            'email' => 'riana@example.com',
            'password' => Hash::make('secret123'), // Hashing password
        ]);
    }
}
