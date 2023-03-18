<?php

namespace Database\Seeders;

use App\Models\Service\Serviceconfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceconfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Serviceconfig::create([
            'title_section' => '02 - MY SERVICES',
            'sub_title_section' => 'I have transform your ideas into remarkable digital products',
        ]);
    }
}
