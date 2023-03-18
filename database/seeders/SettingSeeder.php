<?php

namespace Database\Seeders;

use App\Models\Setting\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Setting::create([
            'contact_phone' => '01025715377',
            'contact_desc' => 'There are many variations of passages of lorem ipsum available but the majority have suffered alteration in some form is also here.',
            'address_title' => 'Cairo Egypt',
            'address_desc'=>'Level 13, 2 Elizabeth Steereyt set Melbourne, Victoria 3000',
            'social_title' => 'SOCIALLY CONNECT',
            'social_desc'=>'Lorem ipsum dolor sit amet enim. Etiam ullamcorper.'
        ]);
    }
}
