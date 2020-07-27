<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = DB::table('contacts')->get();
        return view('contacts', ['contacts' => $contacts]);
    }

    public function contact($contact_id)
    {
        $affected = DB::table('contacts')
            ->where('id', $contact_id)
            ->update(['counter_view' => DB::raw('counter_view + 1')]);

        $affected = DB::table('logs')
            ->insert([
                'contact_id' => $contact_id,
                'status' => 'view',
            ]);

        $contact = DB::table('contacts')
            ->where('id', $contact_id)
            ->first();
        return view('contact', ['contact' => $contact]);
    }
}
