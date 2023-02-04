<?php

namespace Database\Seeders;

use App\Models\About\Education;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $education = [
            ['title'=>'DPR Engineering Dhaka University','date'=>'2004 – 2016','description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'],
            ['title'=>'Product Designer at google','date'=>'2021 – Present','description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'],
            ['title'=>'Computer Science - england','date'=>'2008 – 2012','description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'],
            ['title'=>'Pro product design with udemey','date'=>'2016 - 2020','description'=>'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.'],
        ];


        // create skills
        foreach ($education as $Perm) {
            Education::create([
                'title' => $Perm['title'],
                'date' => $Perm['date'],
                'description' => $Perm['description'],
            ]);
        }


    }
}
