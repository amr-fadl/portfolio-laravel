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
            'title' => 'I will give you Best Product in the shortest time.',
            'description' => 'Im a Rasalina based product design & visual designer focused on crafting clean & user‑friendly experiences',
            'video' => 'https://youtu.be/RTVhZamCXHw'
        ]);
    }
}
