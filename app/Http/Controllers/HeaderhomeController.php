<?php

namespace App\Http\Controllers;
use App\Models\Headerhome;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class HeaderhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Headerhome::all()[0];
        return view('admin.header.index', compact('data'));
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
     * @param  \App\Models\Headerhome  $headerhome
     * @return \Illuminate\Http\Response
     */
    public function show(Headerhome $headerhome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Headerhome  $headerhome
     * @return \Illuminate\Http\Response
     */
    public function edit(Headerhome $headerhome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Headerhome  $headerhome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Headerhome $headerhome)
    {

        $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string', 'max:255'],
            'video' => ['required'],
            'image' => ['mimes:jpg,jpeg,bmp,png']
        ]);

        $request_data = $request->only('title','description','video');

        if ($request->file('image'))
        {

            // delete old img
            if($headerhome->image != 'default.png')
            {
                Storage::disk('public_uploads')->delete('frontend/' . $headerhome->image);
            }

            // cearte uniq name img
            $imgName = uniqid() . $request->file('image')->getClientOriginalName();

            // move img and save
            Image::make($request->file('image'))->resize(null,700, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/' . $imgName));

            // add img to array
            $request_data['image'] = $imgName;

        }

        $headerhome->update($request_data);

        return back();




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Headerhome  $headerhome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Headerhome $headerhome)
    {
        //
    }
}
