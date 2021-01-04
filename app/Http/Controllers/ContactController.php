<?php

namespace App\Http\Controllers;

use App\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::where('status', 'public')->paginate(10);
        $start = $contacts->firstItem();

        return view('contact.index', compact('contacts', 'start'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::where('status', 'public')->findOrFail($id);
        $contact->increment('counter_view');
        $contact->logs()->create(['status' => 'view']);

        return view('contact.show', compact('contact'));
    }
}
