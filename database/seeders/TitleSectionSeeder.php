<?php

namespace Database\Seeders;

use App\Models\TitleSection;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSectionSeeder extends Seeder
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
                'name' => 'services',
                'title' => 'Creates amazing digital experiences',
            ],
            [
                'name' => 'workingProcess',
                'title' => 'A clear product design process is the basis of success',
            ],
            [
                'name' => 'portfolio',
                'title' => 'All creative work',
            ],
        ];


        foreach ($data as $value) {
            TitleSection::create([
                'name' => $value['name'],
                'title' => $value['title'],
            ]);
        }

    }
}
