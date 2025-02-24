<?php

namespace Database\Seeders;

use App\Models\Domain;
use App\Models\Owner;
use App\Models\User;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
        $firstUser = User::first();
        $firstOwner = Owner::first();
        $firstDomain = Domain::first();


        if (!$firstUser) {
            $this->command->info('Nenhum usuário encontrado. Criando um novo...');
            $this->call([
                UserSeeder::class,
            ]);
        }
        if (!$firstOwner) {
            $this->command->info('Nenhum proprietário encontrado. Criando um novo...');
            $this->call([
                OwnerSeeder::class,
            ]);
        }
        if (!$firstDomain) {
            $this->command->info('Nenhum domínio encontrado. Criando um novo...');
            $this->call([
                DomainSeeder::class
            ]);
        }
    }
}
