<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    
    public function run(): void
    {
       DB::table('users')->insert([
            'name' => 'Pedro',
            'email' => 'pedro@example.com',
            'password' => Hash::make('password')
        ]);
    }
}
