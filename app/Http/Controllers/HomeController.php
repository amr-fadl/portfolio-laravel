<?php

namespace App\Http\Controllers;

use App\Models\Headerhome;
use App\Models\About\About;
use App\Models\About\Skill;
use App\Models\TitleSection;
use Illuminate\Http\Request;
use App\Models\About\Education;
use App\Models\Partner\Partner;
use App\Models\Service\Service;
use App\Models\Portfolio\Filter;
use App\Models\Portfolio\Portfolio;
use App\Models\Service\Serviceconfig;
use App\Models\WorkingProcess\WorkingProcess;
use App\Models\WorkingProcess\WorkingProcessconfig;

class HomeController extends Controller
{
    // home page
    public function index()
    {
        $skills = Skill::paginate(7)->pluck('image','name');
        $header = Headerhome::all()[0];
        $about = About::all()[0];

        $services = Service::all();
        $Serviceconfig = Serviceconfig::all()->first();

        $titleSection = TitleSection::all();

        $WorkingProcess = WorkingProcess::all();
        $WorkingProcessconfig = WorkingProcessconfig::all()->first();

        $filter = Filter::all()->load('portfolios');
        $portfolio = Portfolio::all();
        $partner = Partner::all()->first();

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

    // about services
    public function services()
    {
        $services = Service::all();
        return view('frontend.services' , get_defined_vars());
    }
    public function servicesDetails(Request $request)
    {
        $services = Service::find($request->id);

        return view('frontend.services-details' , get_defined_vars());
    }

    // contact page
    public function contact()
    {
        return view('frontend.contact');
    }
}
