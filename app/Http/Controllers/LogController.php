<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Log;

class LogController extends Controller
{
    public function logs($contactID)
    {

        $contact = Contact::findOrFail($contactID);
        $logs = Log::where('contact_id', $contactID)->orderBy('created_at', 'desc')->paginate(10);

        return view('logs', [
            'contact' => $contact,
            'logs' => $logs,
        ]);
    }
}
