<?php

namespace App\Http\Controllers;

use App\Models\Headerhome;
use App\Models\About\About;
use App\Models\About\Education;
use App\Models\About\Skill;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // home page
    public function index()
    {
        $skills = Skill::paginate(7)->pluck('image','name');
        $header = Headerhome::all()[0];
        $about = About::all()[0];
        return view('welcome' , get_defined_vars());
    }

    // about page
    public function about()
    {
        $education = Education::all();
        $header = Headerhome::all()[0]->image;
        $skills = Skill::all();
        $about = About::all()[0];
        return view('frontend.about' , get_defined_vars());
    }
}
