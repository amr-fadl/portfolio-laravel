<?php

namespace App\Http\Controllers;

use App\Models\TitleSection;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class TitleSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = TitleSection::all();
        return view('admin.title-section.all', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.title-section.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
        ]);

        TitleSection::create($request->all());

        toast('Working Process add success','success')->timerProgressBar();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TitleSection  $titleSection
     * @return \Illuminate\Http\Response
     */
    public function show(TitleSection $titleSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TitleSection  $titleSection
     * @return \Illuminate\Http\Response
     */
    public function edit(TitleSection $titleSection)
    {
        return view('admin.title-section.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TitleSection  $titleSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TitleSection $titleSection)
    {
        $request->validate([
            'name' => ['required', 'string'],
        ]);

        $titleSection->update($request->all());

        toast('Working Process add success','success')->timerProgressBar();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TitleSection  $titleSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(TitleSection $titleSection)
    {
        $titleSection->delete();
        toast('delete skill success','warning')->timerProgressBar();
        return back();
    }
}
