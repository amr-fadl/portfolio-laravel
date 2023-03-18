<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Models\Service\Service;
use App\Http\Controllers\Controller;
use App\Models\Service\ServicesList;

class ServicesListController extends Controller
{

    // public $myId;

    // public function __construct(Request $request)
    // {
    //     $this->myId = $request->id;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showlist($id)
    {
        $allData = Service::find($id);
        // dd($allData);
        return view('admin.services.service-list.all', get_defined_vars());
    }
    public function index()
    {
        $allData = ServicesList::all();
        $service = Service::all();

        return view('admin.services.service-list.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $service_id = $request->id;
        return view('admin.services.service-list.add', compact('service_id'));
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
            'name' => ['required'],
        ]);

        ServicesList::create($request->all());

        toast('service list update success','success')->timerProgressBar();

        return redirect()->route('showlist' , $request->get('service_id'));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service\ServicesList  $servicelist
     * @return \Illuminate\Http\Response
     */
    public function show(ServicesList $servicelist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service\ServicesList  $servicelist
     * @return \Illuminate\Http\Response
     */
    public function edit(ServicesList $servicelist)
    {
        return view('admin.services.service-list.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service\ServicesList  $servicelist
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServicesList $servicelist)
    {

        $request->validate([
            'name' => ['required'],
        ]);

        $servicelist->update(['name'=>$request->input('name')]);

        toast('service list update success','success')->timerProgressBar();

        return redirect()->route('showlist',$servicelist->service_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service\ServicesList  $servicelist
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServicesList $servicelist)
    {
        $servicelist->delete();
        toast('delete skill success','warning')->timerProgressBar();
        return back();
    }
}
