<?php

namespace Database\Seeders;

use App\Models\Partner\Partner;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Partner::create([
            'title_section' => 'PARTNERS',
            'title' => 'I proud to have collaborated with some awesome companies',
            'description' => "I'm a bit of a digital product junky. Over the years, I've used hundreds of web and mobile apps in different industries and verticals. Eventually, I decided that it would be a fun challenge to try designing and building my own.",
            'link_conversation'=> '01025715377'
        ]);
    }
}
