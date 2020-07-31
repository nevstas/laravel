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
        $contacts = Contact::with(['logsLimit' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }])->get();

        return view('contacts', ['contacts' => $contacts]);
    }

    public function contact($contactID)
    {

        $contact = Contact::find($contactID);
        $contact->increment('counter_view');
        Log::create(['contact_id' => $contactID, 'status' => 'view']);
        $logs = $contact->logs()->orderBy('created_at', 'desc')->get();

        return view('contact', [
            'contact' => $contact,
            'logs' => $logs,
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
