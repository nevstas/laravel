<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Contact;
use App\Log;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::get();
        return view('contacts', ['contacts' => $contacts]);
    }

    public function contact($contact_id)
    {

        Contact::find($contact_id)->update(['counter_view' => DB::raw('counter_view + 1')]);
        Log::create(['contact_id' => $contact_id, 'status' => 'view']);
        $contact = Contact::where('id', $contact_id)->get()->first();

        return view('contact', ['contact' => $contact]);
    }
}
