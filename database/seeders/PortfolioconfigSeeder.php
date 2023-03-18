<?php

namespace Database\Seeders;

use App\Models\Portfolio\Portfolioconfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioconfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Portfolioconfig::create([
            'title_section' => '04 - PORTFOLIO',
            'sub_title_section' => 'All creative work',
        ]);
    }
}
