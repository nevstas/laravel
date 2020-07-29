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
        $contacts = Contact::get();
        return view('contacts', ['contacts' => $contacts]);
    }

    public function contact($contactID)
    {

        Contact::find($contactID)->update(['counter_view' => DB::raw('counter_view + 1')]);
        Log::create(['contact_id' => $contactID, 'status' => 'view']);
        $contact = Contact::find($contactID);

        return view('contact', ['contact' => $contact]);
    }

    public function create(ContactRequest $request)
    {

        $contact = $request->all();
        $contact['avatar'] = $request->file('avatar')->store('avatar');
        Contact::create($contact);
        return redirect('/');
    }
}
