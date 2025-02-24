<?php

namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class DomainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $firstOwner = Owner::first();

       DB::table('domain')->insert([
            'owner_id' => $firstOwner->id,
            'name' => 'www.lskproducoes.com.br',
            'extension' => '.com.br',
            'status' => 'valid',
            'host' => 'Hostinger',
            'ip_address' => '192.168.0.200',
            'created' => date('Y-m-d', time()),
            'expiration' => '2025-03-01',
            'updated' => date('Y-m-d', time())
        ]);

        DB::table('domain')->insert([
            'owner_id' => $firstOwner->id,
            'name' => 'www.overclk.com.br',
            'extension' => '.com.br',
            'status' => 'valid',
            'host' => 'Hostgator',
            'ip_address' => '192.168.200.200',
            'created' => date('Y-m-d', time()),
            'expiration' => '2025-04-01',
            'updated' => date('Y-m-d', time())
        ]);

        DB::table('domain')->insert([
            'owner_id' => $firstOwner->id,
            'name' => 'www.novacana.com.br',
            'extension' => '.com.br',
            'status' => 'expired',
            'host' => 'Google Cloud',
            'ip_address' => '192.168.201.200',
            'created' => date('Y-m-d', time()),
            'expiration' => '2025-02-01',
            'updated' => date('Y-m-d', time())
        ]);
    }
}
