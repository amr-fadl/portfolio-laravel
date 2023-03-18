<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Models\Social\Social;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Social::all();
        return view('admin.setting.social.all' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.setting.social.add');
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
            'link' => ['required', 'string'],
            'icon' => ['required','mimes:jpg,jpeg,bmp,png']
        ]);

        $request_data = $request->only('link');

        if ($request->file('icon'))
        {

            $imgName = uniqid() . $request->file('icon')->getClientOriginalName();

            Image::make($request->file('icon'))->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/social/' . $imgName));

            $request_data['icon'] = $imgName;

        }

        $request_data['settings_id'] = 1;

        Social::create($request_data);

        toast('social add success','success')->timerProgressBar();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Setting\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function show(Social $social)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function edit(Social $social)
    {
        return view('admin.setting.social.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Social $social)
    {
        $request->validate([
            'link' => ['required', 'string'],
            'icon' => ['required','mimes:jpg,jpeg,bmp,png']
        ]);

        $request_data = $request->only('link');

        if ($request->file('icon'))
        {

            Storage::disk('public_uploads')->delete('frontend/social/' . $social->icon);

            $imgName = uniqid() . $request->file('icon')->getClientOriginalName();

            Image::make($request->file('icon'))->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/social/' . $imgName));

            $request_data['icon'] = $imgName;

        }

        $request_data['settings_id'] = 1;

        $social->update($request_data);

        toast('social edit success','success')->timerProgressBar();

        return redirect()->route('social.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting\Social  $social
     * @return \Illuminate\Http\Response
     */
    public function destroy(Social $social)
    {
        Storage::disk('public_uploads')->delete('frontend/social/' . $social->image);
        $social->delete();
        toast('delete social success','warning')->timerProgressBar();
        return back();
    }
}
