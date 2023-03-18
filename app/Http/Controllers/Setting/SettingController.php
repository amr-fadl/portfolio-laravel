<?php

namespace App\Http\Controllers\Setting;

use Illuminate\Http\Request;
use App\Models\Setting\Setting;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setting = Setting::all()->first();
        return view('admin.setting.index',compact('setting'));
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
     * @param  \App\Models\Setting\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Setting\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Setting\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Setting $setting)
    {
        $request->validate([
            'contact_phone' => ['required','max:50'],
            'contact_desc' => ['required', 'max:140', 'string'],
            'address_title' => ['required','max:50'],
            'address_desc' => ['required', 'max:140', 'string'],
            'social_title' => ['required','max:50'],
            'social_desc' => ['required', 'max:140', 'string'],
            'logo' => ['mimes:jpg,jpeg,bmp,png']
        ]);

        $request_data = $request->except('_token', 'logo');

        if ($request->file('logo'))
        {

            Storage::disk('public_uploads')->delete('frontend/' . $setting->logo);

            $imgName = uniqid() . $request->file('logo')->getClientOriginalName();

            Image::make($request->file('logo'))->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/' . $imgName));

            $request_data['logo'] = $imgName;

        }


        $setting->update($request_data);

        toast('setting edit success','success')->timerProgressBar();

        return redirect()->route('setting.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Setting\Setting  $setting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Setting $setting)
    {
        //
    }
}
