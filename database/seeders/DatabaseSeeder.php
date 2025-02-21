<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // DB::table('users')->insert([
        //     'name' => 'Pedro',
        //     'email' => 'pedro@example.com',
        //     'password' => Hash::make('password')
        // ]);

        // DB::table('owner')->insert([
        //     'name' => 'Laskawski Dominios',
        //     'document' => 'CNPJ',
        //     'document_number' => '08005011000176',
        //     'email' => 'laskawski.dominios@hotmail.com',
        //     'phone' => '41999938461'
        // ]);

        // DB::table('domain')->insert([
        //     'owner_id' => '1',
        //     'name' => 'www.lskproducoes.com.br',
        //     'extension' => '.com.br',
        //     'status' => 'valid',
        //     'host' => 'Hostinger',
        //     'ip_adress' => '192.168.0.200',
        //     'cretaed' => date('Y-m-d', time()),
        //     'expiration' => '2025-03-01',
        //     'updated' => date('Y-m-d', time())
        // ]);

        DB::table('domain')->insert([
            'owner_id' => '1',
            'name' => 'www.overclk.com.br',
            'extension' => '.com.br',
            'status' => 'valid',
            'host' => 'Hostgator',
            'ip_adress' => '192.168.200.200',
            'cretaed' => date('Y-m-d', time()),
            'expiration' => '2025-04-01',
            'updated' => date('Y-m-d', time())
        ]);
    }
}
