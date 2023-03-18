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

        // Services
        $this->call(ServiceconfigSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(ServicesListSeeder::class);

        // Working process
        $this->call(WorkingProcessconfigSeeder::class);
        $this->call(WorkingProcessSeeder::class);

        // Title Section Seeder
        $this->call(TitleSectionSeeder::class);

        // Portfolio seeder
        $this->call(PortfolioconfigSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(FilterSeeder::class);

        // partner seeder
        $this->call(PartnerSeeder::class);

        // contact seeder
        $this->call(ContactSeeder::class);
        $this->call(SettingSeeder::class);
        // $this->call(SocialSeeder::class);
    }
}
