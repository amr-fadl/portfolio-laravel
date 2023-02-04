<?php

namespace Database\Seeders;

use App\Models\About\Skill;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $skills = [
            ['name'=>'html','percentage'=>100,'order_skill'=>2 ,'image'=>'1-skll.png'],
            ['name'=>'css','percentage'=>100,'order_skill'=>2 ,'image'=>'2-skll.png'],
            ['name'=>'bootstrap','percentage'=>99,'order_skill'=>4 ,'image'=>'3-skll.png'],
            ['name'=>'responsive','percentage'=>100,'order_skill'=>2 ,'image'=>'4-skll.png'],
            ['name'=>'javascript','percentage'=>95,'order_skill'=>1 ,'image'=>'5-skll.png'],
            ['name'=>'react','percentage'=>90,'order_skill'=>1 ,'image'=>'6-skll.png'],
            ['name'=>'webpack','percentage'=>85,'order_skill'=>3 ,'image'=>'7-skll.png'],
            ['name'=>'php','percentage'=>90,'order_skill'=>1 ,'image'=>'8-skll.png'],
            ['name'=>'laravel','percentage'=>95,'order_skill'=>1 ,'image'=>'9-skll.png'],
            ['name'=>'oop','percentage'=>90,'order_skill'=>2 ,'image'=>'10-skll.png'],
            ['name'=>'photoshop','percentage'=>85,'order_skill'=>4 ,'image'=>'11-skll.png'],
            ['name'=>'illustrator','percentage'=>80,'order_skill'=>4 ,'image'=>'12-skll.png'],
        ];


        // create skills
        foreach ($skills as $Perm) {
            Skill::create([
                'name' => $Perm['name'],
                'order_skill' => $Perm['order_skill'],
                'image' => $Perm['image'],
                'percentage' => $Perm['percentage'],
            ]);
        }


    }
}
