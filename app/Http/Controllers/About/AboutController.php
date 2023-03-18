<?php

namespace App\Http\Controllers\About;

use App\Models\About\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = About::all()->first();
        return view('admin.about.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title_section' => ['required', 'string', 'max:50'],
            'sub_title_section' => ['required', 'string', 'max:100'],
            'experience' => ['required', 'string', 'max:255'],
            'mini_description' => ['required','max:355'],
            'description' => ['required'],
            'resume' => 'max:10000|mimes:doc,docx,pdf'
        ]);

        Storage::disk('public_uploads')->delete('frontend/about/' . $about->resume);

        $request_data = $request->except('_token', 'resume');

        if ($request->file('resume')) {
            $fileName = uniqid() . $request->file('resume')->getClientOriginalName();
            $request->file('resume')->move(public_path('/uploads/frontend/about') , $fileName);
            $request_data['resume'] =  $fileName;
        }

        $about->update($request_data);
        toast('about update success','success')->timerProgressBar();
        return back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
