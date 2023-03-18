<?php

namespace App\Http\Controllers\Partner;

use Illuminate\Http\Request;
use App\Models\Partner\Partner;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Partner::all()->first();
        return view('admin.partner.index' , get_defined_vars());
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
     * @param  \App\Models\Partner\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $messages = [
            "logo_partners.max" => "image can't be more than 6."
        ];

        $request->validate([
            'title_section' => ['required', 'string', 'max:50'],
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'link_conversation' => 'required|size:11',
            'logo_partners.*' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'logo_partners' => 'max:6'
        ],$messages);

        $request_data = $request->only('title', 'description','title_section','link_conversation');

        if ($request->file('logo_partners'))
        {


            if ($partner->logo_partners != 'default.png') {
                foreach (json_decode($partner->logo_partners) as $value) {
                    Storage::disk('public_uploads')->delete('frontend/partner/' . $value);
                }
            }


            $image_names = [];
            // loop through logo_partners and save to /uploads directory
            foreach ($request->file('logo_partners') as $kye => $image) {

                $imgName = uniqid() . $image->getClientOriginalName();

                Image::make($image)->resize($kye == 2 ? 800 : 400, null, function ($constraint) {
                    $constraint->aspectRatio();
                })->save(public_path('uploads/frontend/partners/' . $imgName));


                $image_names[] = $imgName;
            }

            $request_data['logo_partners'] = json_encode($image_names);

        }

        $partner->update($request_data);

        toast('partner update success','success')->timerProgressBar();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        //
    }
}
