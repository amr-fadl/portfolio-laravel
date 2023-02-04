<?php

namespace App\Http\Controllers\About;

use App\Http\Controllers\Controller;
use App\Models\About\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Education::all();
        return view('admin.about.education.all' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.education.add');
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
            'title' => ['required', 'string', 'max:50'],
            'date' => ['required', 'max:100', 'string'],
            'description' => ['required', 'string'],
        ]);

        $request_data = $request->only('title', 'date','description');

        Education::create($request_data);

        toast('education add success','success')->timerProgressBar();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function edit(Education $education)
    {
        return view('admin.about.education.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:50'],
            'date' => ['required', 'max:100', 'string'],
            'description' => ['required', 'string'],
        ]);

        $request_data = $request->only('title', 'date','description');

        $education->update($request_data);

        toast('education edit success','success')->timerProgressBar();

        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About\Education  $education
     * @return \Illuminate\Http\Response
     */
    public function destroy(Education $education)
    {
        $education->delete();
        toast('delete education success','warning')->timerProgressBar();
        return back();
    }
}
