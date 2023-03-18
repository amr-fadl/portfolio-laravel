<?php

namespace App\Http\Controllers\Portfolio;

use Illuminate\Http\Request;
use App\Models\Portfolio\Filter;
use App\Models\Portfolio\Portfolio;
use App\Http\Controllers\Controller;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = Portfolio::all();
        return view('admin.portfolio.all', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $filter = Filter::all();
        return view('admin.portfolio.add',compact('filter'));
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
            'name' => ['required', 'string'],
            'mini_description' => ['required','max:300','string'],
            'description' => ['required', 'string'],
            'image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $request_data = $request->only('mini_description','description','name');

        if ($request->file('image'))
        {

            $imgName = uniqid() . $request->file('image')->getClientOriginalName();

            Image::make($request->file('image'))->resize(1020, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/portfolio/' . $imgName));

            $request_data['image'] = $imgName;

        }

        Portfolio::create($request_data)->filters()->attach($request->get('filter_portfolio'));

        toast('Portfolio add success','success')->timerProgressBar();

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portfolio\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Portfolio $portfolio)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portfolio\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        $filter = Filter::all();
        return view('admin.portfolio.edit',compact(['portfolio','filter']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Portfolio\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'mini_description' => ['required','max:300','string'],
            'description' => ['required', 'string'],
            'image' => 'mimes:jpg,jpeg,png|max:2048',
        ]);

        $request_data = $request->only('mini_description','description','name');

        if ($request->file('image'))
        {

            if ($portfolio->images != 'default.png') {
                Storage::disk('public_uploads')->delete('frontend/portfolio/' . $request->file('image'));
            }

            $imgName = uniqid() . $request->file('image')->getClientOriginalName();

            Image::make($request->file('image'))->resize(1020, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/frontend/portfolio/' . $imgName));

            $request_data['image'] = $imgName;

        }

        $portfolio->update($request_data);

        // dd($request->get('filter_portfolio'));

        $portfolio->filters()->sync($request->get('filter_portfolio'));


        toast('Portfolio add success','success')->timerProgressBar();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portfolio\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
        if ($portfolio->images != 'default.png') {
            Storage::disk('public_uploads')->delete('frontend/portfolio/' . $portfolio->images);
        }
        $portfolio->delete();
        toast('delete skill success','warning')->timerProgressBar();
        return back();
    }
}
