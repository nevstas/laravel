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
        $contacts = Contact::where('status', 'public')->paginate(10);
        $start = $contacts->firstItem();

        return view('contacts', [
            'contacts' => $contacts,
            'start' => $start,
        ]);
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
        Log::create(['contact_id' => $id, 'status' => 'view']);

        return view('contact', [
            'contact' => $contact,
        ]);
    }
}
