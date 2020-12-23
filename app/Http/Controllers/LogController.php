<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Contact;
use App\Log;
use Illuminate\Support\Facades\Auth;

class LogController extends Controller
{
    public function logs(Contact $contact)
    {
        $this->authorize('view', $contact);
        $logs = $contact->logs()->latest()->paginate(10);
        $start = $logs->firstItem();

        return view('log.index', compact('contact', 'logs', 'start'));
    }
}
