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
        $contacts = Contact::where('user_id', Auth::id())->paginate(10);
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
        $create = auth()->user()->contacts()->create($contact)->logs()->create(['status' => 'create']);
        return redirect()->route('member.contacts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        $this->authorize('view', $contact);
        $contact->increment('counter_view');
        Log::create(['contact_id' => $id, 'status' => 'view']);

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
    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
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
    public function update(ContactEditRequest $request, $id)
    {
        $contact = Contact::find($id);
        $this->authorize('update', $contact);
        $contact->first_name = $request->first_name;
        $contact->last_name = $request->last_name;
        $contact->patronymic = $request->patronymic;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->status = $request->status;
        if ($request->file('avatar')) {
            $contact['avatar'] = $request->file('avatar')->store('avatar');
        }
        $contact->save();
        Log::create(['contact_id' => $id, 'status' => 'update']);
        return redirect()->route('member.contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $this->authorize('delete', $contact);
        $contact->delete();
        return redirect()->route('member.contacts.index');
    }
}
