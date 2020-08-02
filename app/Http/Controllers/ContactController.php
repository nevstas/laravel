<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Storage;

use App\Contact;
use App\Log;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::paginate(10);
        $start = $contacts->firstItem();

        return view('contacts', [
            'contacts' => $contacts,
            'start' => $start,
        ]);
    }

    public function contact($contactID)
    {

        $contact = Contact::findOrFail($contactID);
        $contact->increment('counter_view');
        Log::create(['contact_id' => $contactID, 'status' => 'view']);

        return view('contact', [
            'contact' => $contact,
        ]);
    }

    public function create(ContactRequest $request)
    {

        $contact = $request->all();
        $contact['avatar'] = $request->file('avatar')->store('avatar');
        Contact::create($contact);
        return redirect()->route('contacts.index');
    }
}
