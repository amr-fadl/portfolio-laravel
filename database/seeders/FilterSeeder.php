<?php

namespace Database\Seeders;

use App\Models\Portfolio\Filter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FilterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name'=>'WEBSITE'],
            ['name'=>'LANDING-PAGE'],
            ['name'=>'FRONTEND'],
            ['name'=>'backend'],
        ];

        foreach ($data as $value) {
            Filter::create([
                'name'=> $value['name']
            ]);
        }


    }
}
