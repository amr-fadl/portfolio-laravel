<?php

namespace Database\Seeders;

use App\Models\WorkingProcess\WorkingProcess;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkingProcessSeeder extends Seeder
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
            'title'=> 'STEP - 01',
            'name'=>'Discover',
            'desc'=>'Initial ideas or inspiration & Establishment of user needs'
           ],
           [
            'title'=> 'STEP - 02',
            'name'=>'Define',
            'desc'=>'Interpretation & Alignment of findings to project objectives.'
           ],
           [
            'title'=> 'STEP - 03',
            'name'=>'Develop',
            'desc'=>'Design-Led concept and Proposals hearted & assessed'
           ],
           [
            'title'=> 'STEP - 04',
            'name'=>'Deliver',
            'desc'=>'Process outcomes finalised & Implemented'
           ],
        ];

        foreach ($data as $Perm) {
            WorkingProcess::create([
                'title' => $Perm['title'],
                'name' => $Perm['name'],
                'description' => $Perm['desc'],
            ]);
        }

    }
}
