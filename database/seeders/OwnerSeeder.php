<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('owner')->insert([
            'name' => 'Laskawski Dominios',
            'document' => 'CNPJ',
            'document_number' => '08005011000176',
            'email' => 'laskawski.dominios@hotmail.com',
            'phone' => '41999938461'
        ]);
    }
}
