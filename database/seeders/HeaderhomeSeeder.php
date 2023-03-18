<?php

namespace Database\Seeders;

use App\Models\Headerhome;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeaderhomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Headerhome::create([
            'title' => 'Amr Gamal Fadl',
            'description' => 'I graduated from the Egyptian Institute, Alexandria Academy Department Information Systems Year 2020',
            'video' => 'https://youtu.be/RTVhZamCXHw'
        ]);
    }
}
