<?php

namespace Database\Seeders;

use App\Models\Contact\Contact;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Contact::create([
            'title_section' => '07 - SAY HELLO',
            'sub_title_section' => 'Any questions? Feel free to contact',
            'description' => 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form',
            'email'=>'Info@webmail.com'
        ]);
    }
}
