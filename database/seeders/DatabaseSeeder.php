<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
             TypeSeederTable::class,
             ProjectSeederTable::class,
             TechnologieSeederTable::class,
             ProjectTechnologieSeederTable::class,


        ]);
    }
}
