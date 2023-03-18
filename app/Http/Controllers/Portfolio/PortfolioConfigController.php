<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Portfolio\Portfolioconfig;
use Illuminate\Http\Request;

class PortfolioConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Portfolioconfig::all()->first();
        return view('admin.portfolio.index' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\Portfolio\Portfolioconfig  $portfolioconfig
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolioconfig $portfolioconfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio\Portfolioconfig  $portfolioconfig
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolioconfig $portfolioconfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio\Portfolioconfig  $portfolioconfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolioconfig $portfolioconfig)
    {
        $request->validate([
            'title_section' => ['required', 'string', 'max:50'],
            'sub_title_section' => ['required', 'string', 'max:100'],
        ]);

        $portfolioconfig->update($request->all());
        toast('portfolio config update success','success')->timerProgressBar();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio\Portfolioconfig  $portfolioconfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolioconfig $portfolioconfig)
    {
        //
    }
}
