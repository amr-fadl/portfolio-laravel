<?php

namespace App\Http\Controllers\Service;

use App\Http\Controllers\Controller;
use App\Models\Service\Serviceconfig;
use Illuminate\Http\Request;

class ServiceConfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Serviceconfig::all()->first();
        return view('admin.services.index' , get_defined_vars());
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
     * @param  \App\Models\Service\Serviceconfig  $serviceconfig
     * @return \Illuminate\Http\Response
     */
    public function show(Serviceconfig $serviceconfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service\Serviceconfig  $serviceconfig
     * @return \Illuminate\Http\Response
     */
    public function edit(Serviceconfig $serviceconfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service\Serviceconfig  $serviceconfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serviceconfig $serviceconfig)
    {
        $request->validate([
            'title_section' => ['required', 'string', 'max:50'],
            'sub_title_section' => ['required', 'string', 'max:100'],
        ]);

        $serviceconfig->update($request->all());
        toast('service config update success','success')->timerProgressBar();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service\Serviceconfig  $serviceconfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serviceconfig $serviceconfig)
    {
        //
    }
}
