<?php

namespace App\Http\Controllers\About;

use App\Models\About\Skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $orderSkill = ['very important','important','normal','not important'];

    public function index()
    {
        $allData = Skill::orderBy('order_skill')->get();
        $orderSkill = $this->orderSkill;
        return view('admin.about.skills.all' , get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orderSkill = $this->orderSkill;
        return view('admin.about.skills.add', compact('orderSkill'));
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
            'name' => ['required', 'string', 'max:50'],
            'percentage' => ['required', 'max:100', 'integer'],
            'order_skill' => ['required', 'max:4', 'integer'],
            'image' => ['required','mimes:jpg,jpeg,bmp,png']
        ]);

        $request_data = $request->only('name', 'percentage','order_skill');

        if ($request->file('image'))
        {

            $imgName = uniqid() . $request->file('image')->getClientOriginalName();

            Image::make($request->file('image'))->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/skills/' . $imgName));

            $request_data['image'] = $imgName;

        }

        Skill::create($request_data);

        toast('skill add success','success')->timerProgressBar();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\About\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function edit(Skill $skill)
    {
        $orderSkill = $this->orderSkill;
        return view('admin.about.skills.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Skill $skill)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'percentage' => ['required', 'max:100', 'integer'],
            'order_skill' => ['required', 'max:4', 'integer'],
            'image' => ['mimes:jpg,jpeg,bmp,png']
        ]);

        $request_data = $request->only('name', 'percentage','order_skill');

        if ($request->file('image'))
        {

            Storage::disk('public_uploads')->delete('frontend/skills/' . $skill->image);

            $imgName = uniqid() . $request->file('image')->getClientOriginalName();

            Image::make($request->file('image'))->resize(100, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/skills/' . $imgName));

            $request_data['image'] = $imgName;

        }

        $skill->update($request_data);

        toast('skill edit success','success')->timerProgressBar();

        return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About\Skill  $skill
     * @return \Illuminate\Http\Response
     */
    public function destroy(Skill $skill)
    {
        Storage::disk('public_uploads')->delete('users/' . $skill->image);
        $skill->delete();
        toast('delete skill success','warning')->timerProgressBar();
        return back();
    }
}
