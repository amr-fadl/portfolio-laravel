<?php

namespace Database\Seeders;

use App\Models\Portfolio\Portfolio;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Web Developer',
                'mini_description' => 'Banking Management System',
                'description' => '
                I recently created a website for a charity that supports both Arabic and English languages. I created
                the website using html, css, js, and I recently created a website for a pharmacy to test vaccines and
                immunizations. The site is characterized by a single page to facilitate the registration process for the
                user. I created the site using html, css, js'
            ],
            [
                'name' => 'LANDING PAGE',
                'mini_description' => 'Banking Management System',
                'description' => '
                I recently created a website for a charity that supports both Arabic and English languages. I created
                the website using html, css, js, and I recently created a website for a pharmacy to test vaccines and
                immunizations. The site is characterized by a single page to facilitate the registration process for the
                user. I created the site using html, css, js'
            ],
            [
                'name' => 'frontend developer',
                'mini_description' => 'Banking Management System',
                'description' => '
                I recently created a website for a charity that supports both Arabic and English languages. I created
                the website using html, css, js, and I recently created a website for a pharmacy to test vaccines and
                immunizations. The site is characterized by a single page to facilitate the registration process for the
                user. I created the site using html, css, js'
            ],
            [
                'name' => 'backend developer',
                'mini_description' => 'Banking Management System',
                'description' => '
                I recently created a website for a charity that supports both Arabic and English languages. I created
                the website using html, css, js, and I recently created a website for a pharmacy to test vaccines and
                immunizations. The site is characterized by a single page to facilitate the registration process for the
                user. I created the site using html, css, js'
            ],
        ];


        foreach ($data as $key => $value) {
           $rr = Portfolio::create([
                'name' => $value['name'],
                'mini_description' => $value['mini_description'],
                'description' => $value['description'],
            ]);
            $rr->filters()->attach($key+1);
        }
    }
}
