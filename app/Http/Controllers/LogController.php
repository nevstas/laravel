<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Log;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function logs($contactID)
    {
        $contact = Contact::findOrFail($contactID);
        if ($contact->user_id != Auth::id()) {
            abort(404);
        }
        $logs = Log::where('contact_id', $contactID)->orderBy('created_at', 'desc')->paginate(10);
        $start = $logs->firstItem();

        return view('logs', [
            'contact' => $contact,
            'logs' => $logs,
            'start' => $start,
        ]);
    }
}
