<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use RealRashid\SweetAlert\Facades\Alert;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('permission:users_read')->only(['index','show']);
        $this->middleware('permission:users_create')->only(['create']);
        $this->middleware('permission:users_update')->only(['edit']);
        $this->middleware('permission:users_delete')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     // $allData = User::all();
    //     // return view('admin.user.all', compact('allData'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     $allRole = Role::all();
    //     $allPerm = Permission::all();
    //     return view('admin.user.add', get_defined_vars());
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
    //         'password' => ['required', 'confirmed', Rules\Password::defaults()],
    //         'image' => ['image', 'mimes:jpg,jpag,bmp,png', 'max:2048']
    //     ]);


    //     $request_data = $request->only('name', 'email');

    //     if ($request->file('image')) {
    //         // $imgName = uniqid() . $request->file('image')->getClientOriginalName();
    //         // $request->file('image')->move(public_path('uploads/users'), $imgName);
    //         // $request_data['image'] =  $imgName;



    //         $imgName = uniqid() . $request->file('image')->getClientOriginalName();

    //         Image::make($request->file('image'))->resize(300, null, function ($constraint) {
    //             $constraint->aspectRatio();
    //         })->save(public_path('uploads/users/' . $imgName));

    //         $request_data['image'] = $imgName;


    //     }

    //     $request_data['password'] = Hash::make($request->password);

    //     $user = User::create($request_data);

    //     $user->attachRole($request->user_role);
    //     $user->attachPermissions($request->user_permissions);

    //     toast('add user success','success')->timerProgressBar();

    //     return redirect()->route('user.index');
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function show(User $user)
    // {
    //     $allRole = Role::all();
    //     $allPerm = Permission::all();
    //     return view('admin.user.add', get_defined_vars());
    // }

    public function index()
    {
        // $allRole = Role::all();
        // $allPerm = Permission::all();
        $user = User::get()->first();
        return view('admin.user.edit', get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $allRole = Role::all();
        $allPerm = Permission::all();
        return view('admin.user.edit', get_defined_vars());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['sometimes', $request->password ? Rules\Password::defaults() : ''],
            'image' => ['mimes:jpg,jpeg,bmp,png']
        ]);


        $request_data = $request->only('name', 'email');

        if ($request->file('image')) {
            // $imgName = uniqid() . $request->file('image')->getClientOriginalName();
            // $request->file('image')->move(public_path('uploads/users'), $imgName);
            // $request_data['image'] =  $imgName;

            if($user->image != 'user.jpg')
            {
                // unlink(public_path('uploads/users/' . $user->image));
                Storage::disk('public_uploads')->delete('users/' . $user->image);
            }

            $imgName = uniqid() . $request->file('image')->getClientOriginalName();

            Image::make($request->file('image'))->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/users/' . $imgName));

            $request_data['image'] = $imgName;

        }

        $request->password ? $request_data['password'] = Hash::make($request->password):'';

        $user->update($request_data);

        // $user->syncRoles([$request->user_role]);
        // $user->syncPermissions($request->user_permissions);

        toast('add user success','success')->timerProgressBar();

        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    // public function destroy(User $user)
    // {
    //     $user->detachRoles($user->Roles);
    //     $user->detachPermissions($user->Permissions);
    //     if($user->image != 'user.jpg')
    //     {
    //         // unlink(public_path('uploads/users/' . $user->image));
    //         Storage::disk('public_uploads')->delete('users/' . $user->image);
    //     }

    //     $user->delete();
    //     toast('delete user success','warning')->timerProgressBar();
    //     return back() ;
    // }
}
