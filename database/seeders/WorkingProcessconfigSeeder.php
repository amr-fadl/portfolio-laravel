<?php

namespace Database\Seeders;

use App\Models\WorkingProcess\WorkingProcessconfig;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkingProcessconfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WorkingProcessconfig::create([
            'title_section' => '03 - WORKING PROCESS',
            'sub_title_section' => 'A clear product design process is the basis of success',
        ]);
    }
}
