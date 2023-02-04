<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(LaratrustSeeder::class);
        $this->call(UserSeeder::class);

        // Header Home
        $this->call(HeaderHomeSeeder::class);

        // About
        $this->call(AboutSeeder::class);
        $this->call(SkillSeeder::class);
        $this->call(EducationSeeder::class);

    }
}
