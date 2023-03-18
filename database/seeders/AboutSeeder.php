<?php

namespace Database\Seeders;

use App\Models\About\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create([
            'title_section' => '01 - ABOUT ME',
            'sub_title_section' => 'I have transform your ideas into remarkable digital products',
            'experience' => '20+ Years Experience In this game, Means Product Designing',
            'mini_description' => 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer',
            'description' => "
                I recently created a website for a charity that supports both Arabic and English languages. I created
                the website using html, css, js, and I recently created a website for a pharmacy to test vaccines and
                immunizations. The site is characterized by a single page to facilitate the registration process for the
                user. I created the site using html, css, js
            ",
        ]);
    }
}
