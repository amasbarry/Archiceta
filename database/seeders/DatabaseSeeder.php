<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([ 
            UserSeeder::class,
            ClientSeeder::class,
            ProjetSeeder::class,
            ActiviteSeeder::class,
            DepenseSeeder::class,
            PaiementSeeder::class,
            DocumentSeeder::class,
            NotificationSeeder::class,
        ]);
    }
}