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
            'name' => 'Yan',
            'email' => 'yan@teste.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'Nath',
            'email' => 'nath@teste.com',
            'password' => Hash::make('123456')
        ]);

        User::create([
            'name' => 'Mary',
            'email' => 'Mary@teste.com',
            'password' => Hash::make('123456')
        ]);
    }
}
