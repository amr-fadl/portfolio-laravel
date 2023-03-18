<?php

namespace App\Http\Controllers\Service;

use Illuminate\Http\Request;
use App\Models\Service\Service;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $allData = Service::all();

        return view('admin.services.all', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.add');
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
            "images.max" => "image can't be more than 3."
        ];
        $request->validate([
            'title_section' => ['required', 'string', 'max:50'],
            'sub_title_section' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'mini_description' => ['required', 'max:300', 'string'],
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'images' => 'max:3'
        ],$messages);

        $request_data = $request->only('title', 'description','mini_description','title_section','sub_title_section');

        if ($request->file('images'))
        {
            $image_names = [];
            // loop through images and save to /uploads directory
            foreach ($request->file('images') as $kye => $image) {

                $imgName = uniqid() . $image->getClientOriginalName();

                Image::make($image)->resize($kye == 2 ? 800 : 400, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/frontend/services/' . $imgName));


                $image_names[] = $imgName;
            }

            $request_data['images'] = json_encode($image_names);

        }

        Service::create($request_data);

        toast('service add success','success')->timerProgressBar();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Service\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $messages = [
            "images.max" => "image can't be more than 3."
        ];
        $request->validate([
            'title_section' => ['required', 'string', 'max:50'],
            'sub_title_section' => ['required', 'string', 'max:100'],
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'mini_description' => ['required', 'max:300', 'string'],
            'images.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'images' => 'max:3'
        ],$messages);

        $request_data = $request->only('title', 'description','mini_description','title_section','sub_title_section');

        if ($request->file('images'))
        {


            if ($service->images != 'default.png') {
                foreach (json_decode($service->images) as $value) {
                    Storage::disk('public_uploads')->delete('frontend/services/' . $value);
                }
            }



            $image_names = [];
            // loop through images and save to /uploads directory
            foreach ($request->file('images') as $kye => $image) {

                $imgName = uniqid() . $image->getClientOriginalName();

                Image::make($image)->resize($kye == 2 ? 800 : 400, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/frontend/services/' . $imgName));


                $image_names[] = $imgName;
            }

            $request_data['images'] = json_encode($image_names);

        }

        $service->update($request_data);

        toast('service update success','success')->timerProgressBar();

        return redirect()->route('service.index');
    }

    public function showlist(Request $request)
    {

        $service = Service::find($request->service);

        return view('admin.services.serviceList', get_defined_vars());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if ($service->images != 'default.png') {
            foreach (json_decode($service->images) as $value) {
                Storage::disk('public_uploads')->delete('frontend/services/' . $value);
            }
        }
        $service->delete();
        toast('delete skill success','warning')->timerProgressBar();
        return back();
    }
}
