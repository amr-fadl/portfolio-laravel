<?php

namespace Database\Seeders;

use App\Models\Service\Service;
use Illuminate\Database\Seeder;
use App\Models\Service\ServicesList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServicesListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            'Research & Data',
            'Branding & Positioning',
            'Business Consulting',
            'Go To Market'
        ];

        foreach ($data as $Perm) {
            ServicesList::create([
                'name' => $Perm,
                'service_id' => 1
            ]);
        }

    }
}
