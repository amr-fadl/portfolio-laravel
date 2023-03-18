<?php

namespace App\Http\Controllers\Contact;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Contact\ContactMessage;

class ContactMessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = DB::table('contact_messages')->orderBy('status')->get();
        return view('admin.contact.all' , get_defined_vars());
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

        $request->validate([
            'name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'string', 'max:255'],
            'message' => ['required','max:355'],
        ]);

        $request_data = $request->except(['_token']);

        $request_data['status'] = 0;

        ContactMessage::create($request_data);
        toast('message was sent.','success')->timerProgressBar();

        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact\ContactMessage  $contactMessage
     * @return \Illuminate\Http\Response
     */
    public function show(ContactMessage $contactMessage)
    {
        $contactMessage->update(['status'=>1]);
        return view('admin.contact.show',get_defined_vars());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact\ContactMessage  $contactMessage
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactMessage $contactMessage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact\ContactMessage  $contactMessage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactMessage $contactMessage)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact\ContactMessage  $contactMessage
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactMessage $contactMessage)
    {
        $contactMessage->delete();
        toast('delete message success','warning')->timerProgressBar();
        return back();
    }
}
