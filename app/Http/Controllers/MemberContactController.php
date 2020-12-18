<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Requests\ContactEditRequest;
use App\Http\Requests\ContactRequest;
use App\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = auth()->user()->contacts()->paginate(10);
        $start = $contacts->firstItem();

        return view('member_contacts', [
            'contacts' => $contacts,
            'start' => $start,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('member_contact_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $contact = $request->all();
        $contact['avatar'] = $request->file('avatar')->store('avatar');
        auth()->user()->contacts()->create($contact)->logs()->create(['status' => 'create']);
        return redirect()->route('member.contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $this->authorize('view', $contact);
        $contact->increment('counter_view');
        $contact->logs()->create(['status' => 'view']);

        return view('member_contact', [
            'contact' => $contact,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        $this->authorize('update', $contact);
        return view('member_contact_edit', [
            'contact' => $contact,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(ContactEditRequest $request, Contact $contact)
    {
        $this->authorize('update', $contact);

        $fields = $request->all();
        if ($request->file('avatar')) {
            $fields['avatar'] = $request->file('avatar')->store('avatar');
        }
        $contact->fill($fields)->save();
        $contact->logs()->create(['status' => 'update']);
        return redirect()->route('member.contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $this->authorize('delete', $contact);
        $contact->delete();
        return redirect()->route('member.contacts.index');
    }
}
