<?php

namespace App\Http\Controllers\WorkingProcess;

use App\Http\Controllers\Controller;
use App\Models\WorkingProcess\WorkingProcessconfig;
use Illuminate\Http\Request;

class WorkingProcessconfigController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = WorkingProcessconfig::all()->first();
        return view('admin.working-process.index' , get_defined_vars());
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
     * @param  \App\Models\WorkingProcess\WorkingProcessconfig  $workingProcessconfig
     * @return \Illuminate\Http\Response
     */
    public function show(WorkingProcessconfig $workingProcessconfig)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkingProcess\WorkingProcessconfig  $workingProcessconfig
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkingProcessconfig $workingProcessconfig)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkingProcess\WorkingProcessconfig  $workingProcessconfig
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkingProcessconfig $workingProcessconfig)
    {
        $request->validate([
            'title_section' => ['required', 'string', 'max:50'],
            'sub_title_section' => ['required', 'string', 'max:100'],
        ]);

        $workingProcessconfig->update($request->all());
        toast('service config update success','success')->timerProgressBar();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkingProcess\WorkingProcessconfig  $workingProcessconfig
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingProcessconfig $workingProcessconfig)
    {
        //
    }
}
