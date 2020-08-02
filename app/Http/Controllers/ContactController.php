<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Requests\ContactEditRequest;
use Illuminate\Http\Request;
use App\Contact;
use App\Log;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::paginate(10);
        $start = $contacts->firstItem();

        return view('contacts', [
            'contacts' => $contacts,
            'start' => $start,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contact_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact = $request->all();
        $contact['avatar'] = $request->file('avatar')->store('avatar');
        Contact::create($contact);
        return redirect()->route('contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->increment('counter_view');
        Log::create(['contact_id' => $id, 'status' => 'view']);

        return view('contact', [
            'contact' => $contact,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);

        return view('contact_edit', [
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactEditRequest $request, $id)
    {
        $contact = Contact::find($id);
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->patronymic = $request->patronymic;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        if ($request->file('avatar')) {
            $contact['avatar'] = $request->file('avatar')->store('avatar');
        }
        $contact->save();
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dump("destroy");
    }
}
