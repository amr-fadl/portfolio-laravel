<?php

namespace App\Http\Controllers\WorkingProcess;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Models\WorkingProcess\WorkingProcess;

class WorkingProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = WorkingProcess::all();
        return view('admin.working-process.all', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.working-process.add');
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
            'title' => ['required', 'string'],
            'name' => ['required', 'string'],
            'description' => ['required','max:500', 'string'],
            'icon' => 'required|image|mimes:jpg,jpeg,png,gif|max:200',
        ]);

        $request_data = $request->only('title', 'description','name');


        if ($request->file('icon'))
        {

            $imgName = uniqid() . $request->file('icon')->getClientOriginalName();

            Image::make($request->file('icon'))->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/working_processes/' . $imgName));

            $request_data['icon'] = $imgName;

        }

        WorkingProcess::create($request_data);

        toast('Working Process add success','success')->timerProgressBar();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkingProcess\WorkingProcess  $workingProcess
     * @return \Illuminate\Http\Response
     */
    public function show(WorkingProcess $workingProcess)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkingProcess\WorkingProcess  $workingProcess
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkingProcess $workingProcess)
    {
        return view('admin.working-process.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WorkingProcess\WorkingProcess  $workingProcess
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, WorkingProcess $workingProcess)
    {
        $request->validate([
            'title' => ['required', 'string'],
            'name' => ['required', 'string'],
            'description' => ['required','max:500', 'string'],
            'icon' => 'image|mimes:jpg,jpeg,png,gif|max:200',
        ]);

        $request_data = $request->only('title', 'description','name');

        if ($request->file('icon'))
        {

            $imgName = uniqid() . $request->file('icon')->getClientOriginalName();

            Image::make($request->file('icon'))->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/working_processes/' . $imgName));

            $request_data['icon'] = $imgName;

        }

        $workingProcess->update($request_data);

        toast('Working Process add success','success')->timerProgressBar();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkingProcess\WorkingProcess  $workingProcess
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkingProcess $workingProcess)
    {
        if ($workingProcess->images != 'default.png') {
            Storage::disk('public_uploads')->delete('frontend/working_processes/' . $workingProcess->images);
        }
        $workingProcess->delete();
        toast('delete skill success','warning')->timerProgressBar();
        return back();
    }
}
