<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Models\Portfolio\Filter;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;

class FilterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Filter::all();
        return view('admin.portfolio.filter.all', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.portfolio.filter.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            "name.regex" => "remove space"
        ];
        $request->validate([
            'name' => ['required', 'string','unique:filters','max:1'],
            'name' => ['regex:/^\S*$/u'],
        ],$messages);


        Filter::create($request->all());

        toast('add new filter portfolio success','success')->timerProgressBar();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function show(Filter $filter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function edit(Filter $filter)
    {
        return view('admin.portfolio.filter.edit',compact('filter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Filter $filter)
    {
        $messages = [
            "name.regex" => "remove space"
        ];
        $request->validate([
            'name' => ['required', 'string','unique:filters','max:1'],
            'name' => ['regex:/^\S*$/u'],
        ],$messages);

        $filter->update($request->all());

        toast('update filter portfolio success','success')->timerProgressBar();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio\Filter  $filter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Filter $filter)
    {
        $filter->delete();
        toast('delete filter success','warning')->timerProgressBar();
        return back();
    }
}
